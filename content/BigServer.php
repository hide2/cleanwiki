<?php
/////////////////////////// 设置文档标题、作者、email
$title = 'BigServer';
$author = '犀利哥';
$email = '23771066@qq.com';

require __DIR__.'/../_header.php';

/////////////////////////// 文档内容开始
$md = <<<SSS
=blue <h1>架构图</h1>
-------------------------
![架构图](https://timgsa.baidu.com/timg?image&quality=80%20&size=b10000_10000&sec=1513443967768&di=4e81c14c15c50f23c57d075f343d6878&imgtype=jpg&src=http%3A%2F%2Fe.hiphotos.baidu.com%2Fimage%2Fpic%2Fitem%2F8435e5dde71190effad95452c51b9d16fdfa6019.jpg)

  
=blue <h1>架构特点</h1>
-------------------------
- 分布式：Register、Gate、Worker支持分布式部署
- 动态扩容：可动态增加Gate/Worker服务进程组，自动注册到Register后自动提供服务
- 高可用：使用ZooKeeper对Register解决单点问题，整个架构无单点
- 高并发：单服务器按CPU运算效率可达5~10K数量级并发，服务器集群性能线性递增，比如棋牌类等运算不是太密集的游戏可以10台服务器集群轻松支持100K并发
- 热更新：Worker一局游戏后自动退出，下次开局前启动新Worker进程重新加载代码以达到自动热更新
- 安全：各连接采用密钥进行认证，各连接onConnect后需N秒内完成认证否则自动断开连接，各连接认证之前拒绝处理任何逻辑消息
- 性能：单局游戏性能依靠游戏逻辑优化CPU运算和网络发包，网络IO使用libevent提供非阻塞IO，数据持久化如果是分服DB则很容易优化如果是大服DB则建立集群，操作系统底层需要内核参数调优支持高并发连接，硬件加速考虑SSD、高性能CPU和网卡
- 内存：Worker一局游戏后自动退出，保证资源释放和内存回收

  
=blue <h1>启动流程</h1>
-------------------------
- Register、Gate、Worker进程启动
    - Register监听Gate连接端口7070，和Client连接端口8080
    - Gate监听Worker连接端口6060，Gate连接端口7070，和Client连接端口8080
    - Worker附属于Gate，由Gate启动，监听共享名字，并与Gate保持长连接
- Gate向Register发起长连接注册自己，Register把所有Gate的通讯地址保存在内存中
- Register把所有Gate的通讯地址发给Gate
- Gate收到所有Gate的通讯地址后向所有Gate发起长连接
- 运行过程中有新的Gate注册到Register（如分布式部署加机器），则将新的Gate通讯地址列表将广播给所有Gate，Gate收到后建立连接
- 如果有Gate下线，则Register服务会收到通知，会将对应的内部通讯地址删除，然后广播新的内部通讯地址列表给所有Gate，Gate不再连接下线的Gate
- 至此Register与所有Gate建立长连接，Gate和所有其他Gate建立长连接
- Register与Gate、Gate与Gate之间有心跳包检查是否连接存活
- Gate定期同步当前Client连接数给Register，Register把所有Gate的Client连接数保存在内存中以做负载均衡
- 使用ZooKeeper作为Register实现，提供命名服务和负载均衡，并解决单点问题

  
=blue <h1>客户端流程</h1>
-------------------------
- Client连接Register并请求Gate通讯地址，Register通过负载均衡分配Gate地址给Client
- Client向Gate发起长连接
- Client查看好友在线状态流程：
    - Client向Gate请求好友列表
    - Gate请求数据库Client的好友列表和在线状态
    - Gate返回好友列表和在线状态给Client
- Client1给在线好友Client2发消息：
    - Client1连接Gate1，Client2连接Gate2
    - Client1发送消息给Gate1
    - Gate1检查Client2当前是否连接了Gate1，如果是，则转发消息给Client2
    - Gate1检查Client2当前是否连接了Gate1，如果否，则转发消息给所有其他Gate
    - Gate2收到Gate1转发的消息，Gate2检查Client2当前是否连接了Gate2，如果是，则转发消息给Client2

  
=blue <h1>匹配开房间流程</h1>
-------------------------
- 另外一组提供房间匹配+玩游戏服务的Register(Room)、Gate(Room)、Worker(Room)进程启动
    - Register(Room)监听Gate(Room)连接端口7070，和Gate(Client)连接端口8080
    - Gate(Room)监听Worker连接端口6060，Gate(Room)连接端口7070，和Gate(Client)连接端口8080
    - Worker(Room)附属于Gate(Room)，由Gate启动，监听共享名字，并与Gate(Room)保持长连接
- Register(Room)与所有Gate(Room)建立长连接
- Client向Gate(Client)请求房间匹配
- Gate(Client)连接Register(Room)并请求Gate(Room)通讯地址，Register(Room)通过负载均衡或段位分组策略分配Gate(Room)地址给Gate(Client)
- Gate(Client)向Gate(Room)发起长连接并缓存连接，并将Gate(Room)地址发送Client
- Client向Gate(Room)发起长连接后，Gate(Room)绑定ClientID和Gate(Client)连接
- Gate(Room)匹配到一组Client后，将Client连接share到一个Worker(Room)，并通知Client开始游戏(Gate(Room)启动时默认启动N个Worker(Room)，当Worker不够时动态启动Worker(Room)，并且当一个Worker结束后自动退出进程释放资源)
- 一局游戏结束后，Worker(Room)通知结果给Gate(Room)，Gate(Room)转发结果给Client对应的Gate(Client)，Gate(Client)对结果数据进行持久化

  
=blue <h1>接口和属性</h1>
-------------------------
- Register
    - attributes:
secretKey
gatePort
clientPort
gateAddresses
gateConnections
    - functions:
start
broadcastGateAddresses
onRegisterStart
onGateConnect
onGateClose
onGateMessage
onClientConnect
onClientClose
onClientMessage
- Gate
    - attributes:
secretKey
workerPort
gatePort
clientPort
registerAddress
registerConnection
defaultWorkerCount
workerConnections
gateAddresses
gateConnections
clientConnections
    - functions:
start
startWorker
connectRegister
connectGate
onGateStart
onRegisterConnect
onRegisterClose
onRegisterMessage
onWorkerConnect
onWorkerClose
onWorkerMessage
onGateConnect
onGateClose
onGateMessage
onClientConnect
onClientClose
onClientMessage
- Worker
    - attributes:
name
secretKey
gateAddress
gateConnection
    - functions:
start
connectGate
onWorkerStart
onGateConnect
onGateClose
onGateMessage
- Client
    - attributes:
secretKey
registerAddress
registerRoomAddress
gateConnection
gateRoomConnection
    - functions:
connectRegister
connectRegisterRoom
connectGate
connectGateRoom
onClientStart
onRegisterConnect
onRegisterClose
onRegisterMessage
onGateConnect
onGateClose
onGateMessage
onRegisterRoomConnect
onRegisterRoomClose
onRegisterRoomMessage
onGateRoomConnect
onGateRoomClose
onGateRoomMessage
- 通用
    - functions:
listen
connect
sendMessage
ping
close
  
2017.12.16
SSS;
/////////////////////////// 文档内容结束

echo $Parsedown->text($md);

require __DIR__.'/../_footer.php';
?>
