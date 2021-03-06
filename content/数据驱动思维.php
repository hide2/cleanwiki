<?php
/////////////////////////// 设置文档标题、作者、email
$title = '数据驱动思维';
$author = '犀利哥';
$email = '23771066@qq.com';

require __DIR__.'/../_header.php';

/////////////////////////// 文档内容开始
$md = <<<SSS
# 什么是数据驱动？
-------------------------
=blue Data-driven means that progress in an activity is compelled by data, rather than by intuition or by personal experience
  
# 为什么要数据驱动？
-------------------------
- 数据驱动和数据分析是一个公司的战略级优势
- 2017是属于数据的一年，2017及以后拥有数据的企业将在商战中获胜
- 数据驱动AI，数据驱动未来：
    - 蒸汽机时代
    - 电气时代
    - 信息时代
    - 人工智能时代（AI革命背后的三驾马车：深度学习、强大算力、大数据）

![AI](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510839669&di=eabc0c80f9e7c22e36aa1f2e06754205&imgtype=jpg&er=1&src=http%3A%2F%2Fwww.im170.com%2Fzb_users%2Fupload%2F2017%2F05%2F20170528184816_576487947.jpg)
  
# 数据驱动成就了哪些公司？
-------------------------
=blue 教父级的大数据公司 —— Palantir
- 成立于2003年
- 创始人彼得·蒂尔（Peter Thiel）
- 估值高达200亿美金，估值排名全球第四的未上市公司
- 发现纳斯达克前主席麦道夫（ Bernie Madoff）的“庞氏骗局”并追回隐藏的数十亿美元巨款
- 通过大数据情报分析成功追捕本拉登（Osama bin Laden）

![Palantir](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510243662916&di=9a9e876838fc327fa44c1ca72f76a5eb&imgtype=0&src=http%3A%2F%2Fwww.leewiart.com%2Fuserfiles%2F14849%2F933a1f2d10edc25aac486b9d0ebb4f2d.jpg)
  
=blue 社交之王 —— Facebook
- 成立于2004年
- 月活20亿
- 市值5000亿美金
- 创始人马克·扎克伯格（ Mark Elliot Zuckerberg ）

Facebook在网站改版时采用灰度发布，关注Release Rate，DAU，User Engagement，Ads Impression等指标，最终通过数据决定Roll Back改版方案。同期国内的社交网站人人网直接抄袭Facebook改版并上线，结果最终人人网市值缩水近80，2015年3月27日投资人直接让陈一舟辞职。
![Facebook](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510838485&di=aabf579754479932ad4fbcc2ed9fb2df&imgtype=jpg&er=1&src=http%3A%2F%2Fa4.peoplecdn.cn%2Fe981f1f32cf59e413d21f748c4d8d340.png)
  
=blue 全球最大职业社交网络—— Linkedin
- 创始人创始人Reid Hoffman和Peter Thiel同属PayPal黑帮成员，促进并参与了Facebook最早期的投资
- 成立于2002年
- 全球会员人数5亿
- 将数据驱动植入公司文化，深入产品、客户服务、销售、市场部门
- 从一个7000万左右年营收的企业，增长至30亿美元营业额的企业，五年业务增长超过40倍
- 微软以260亿美金现金溢价50%收购

![Palantir](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510243851116&di=31e3caa1ef377887d458d9639d08eb18&imgtype=0&src=http%3A%2F%2Fwww.ironstonehq.com%2Fwp-content%2Fuploads%2F2015%2F04%2FiStock_000035135258Large.jpg)
  
# 数据驱动哪些决策？
-------------------------
- 运营监控
    - 昨天的PV和UV是多少?
    - 上个月的销售表现如何？ 
    - 近期活跃用户数变化趋势？
    - 留存、拉新、变现
- 产品改进
    - 用户黏性如何？
    - 产品核心流程的转化如何？
    - 新功能的使用留存怎样？
    - 拍脑袋的方式改产品？还是研发+数据分析+学习的科学循环？
- 商业决策
    - 是否应该成立成都分公司？
    - 明年是否可以进军海外市场？
    - 下半年是否可以立项吃鸡项目？

![吃鸡](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510245163324&di=5122127a4d038e9e6fc5300359fbdbfb&imgtype=0&src=http%3A%2F%2Fovsnhdoi9.bkt.clouddn.com%2Fuploads%2Fimage%2Ffile%2F78%2Fc8%2F78c847340c8ae394c92b30fb0e750958.jpg)
  
# 数据驱动的工具？
-------------------------
- 现实中的数据驱动：提需求、排队、数据工程师处理杂乱的数据源、给结果
- 理想中的数据驱动：自助分析平台，提需求+自助满足
- 更好的技术架构：[Hadoop](http://hadoop.apache.org/)+[Presto](https://prestodb.io/)

  
# 数据驱动决策的思维方式？
-------------------------
- 信度与效度思维 – 用穿衣尺码还是用体脂率衡量肥胖？
- 平衡思维 – 薪资与效率，工作时长与错误率
- 分类思维 – 消费者分群，购买频率和客单价高的金牌客户
- 矩阵思维 – 波士顿矩阵，销售增长率和市场占有率高的明星产品
- 管道/漏斗思维 – 注册转化，购买流程
- 相关思维 – 指标间相关系数，正相关，负相关，找到最重要的数据
- 远近度思维 – 划分指标与核心问题距离的远近
- 逻辑树思维 – 分解与汇总，下钻与上卷
- 时间序列思维 – 同比，环比，生命周期
- 队列分析思维 – 次留，3留，4留，5留，6留，7留
- 循环/闭环思维 – 业务流程闭环、用户生命周期闭环，逻辑和影响
- 测试/对比思维 – A/B test
- 指数化思维 – 综合指数，降维，销售绩效综合指数，纳斯达克指数
![BCG Matrix](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510245319990&di=45baec30f1abfdebe718e84c212c8dca&imgtype=0&src=http%3A%2F%2Fimg2.template.cache.wps.cn%2Fwps%2Fcdnwps%2Fupload%2Fofficial%2Ftemplate%2F2013-2-5%2F5110a4d64ecd9.png)

  
# 数据驱动与创新：Zynga大败局
-------------------------
- 成立于2007年
- 鼎盛时期在Facebook游戏中前十位占据了9位
- 王牌产品《Farm Ville》月活达到了前所未有的高度—8300万
- 月活跃用户总数达到2.35亿
- 数据控，拥有一套完整的数据分析系统，包括数据仓库、A/B测试工具和数据分析方法，不仅可以在运营过程中反馈问题，厉害之处更在于可以再游戏立项之初就预测游戏的DAU、收入
- 新游戏的立项必须提交缜密的预测报告，严重制约了创新精神
- 2012年投资者抛售股票导致Zynga的市值蒸发了约100亿美元

![Zynga](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510245261446&di=ecb8206b7b4262fec86fe471404e2df6&imgtype=0&src=http%3A%2F%2Fpic2.mofang.com.tw%2F2015%2F0508%2F20150508105015848.jpg)

=info 滥用数据容易导致局部优化，进而忽视大局，这是极其危险乃至致命的。渐进式的改变可以达到局部极限，创新则可能导致全局洗牌。同质化和粗糙的快速复制式游戏注定失败。创新玩法、创新体验和高品质才是游戏的未来？

# 数据分析师的三重境界
-------------------------
- 数据的搜集、整理和统计
- 通过数据分析发现问题
- 通过数据分析指出方向、预见未来

![Data Scientist](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1511588692127&di=d8ef337ca4f0cd52cacb08a0d823cdfe&imgtype=0&src=http%3A%2F%2Fimage20.it168.com%2F201308_0x0%2F1521%2Fbd7295001adc447a.png)

  
# 数据分析三重门
-------------------------
- 统计计数
- 多维分析
- 机器学习

  
# 数据分析模型
-------------------------
- PRAPA
    - 用户推广（Promotion）
    - 注册用户（Register）
    - 活跃用户（Active）
    - 付费用户（Pay）
    - 平均每用户收益（ARPU）
- AARRR
    - 获取用户（Acquisition）
    - 提高活跃度（Activation）
    - 提高留存率（Retention）
    - 获取收入（Revenue）
    - 自传播（Refer）

![AARRR](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1511588893157&di=d657c6ad6bc4cd6302b9028a35b2995f&imgtype=0&src=http%3A%2F%2Fimg.ptcms.csdn.net%2Farticle%2F201512%2F03%2F565ff68b33d36.jpg)


  
2017.11.9

SSS;
/////////////////////////// 文档内容结束

echo $Parsedown->text($md);

require __DIR__.'/../_footer.php';
?>
