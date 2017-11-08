<?php
/////////////////////////// 设置文档标题、作者、email
$title = '《精益数据分析》Alistair Croll';
$author = '犀利哥';
$email = '23771066@qq.com';

require __DIR__.'/../_header.php';

/////////////////////////// 文档内容开始
$md = <<<SSS
# 封面
-------------------------
![封面](http://img3m1.ddimg.cn/92/5/23622581-1_u_1.jpg)

# 作者
-------------------------
![作者](https://sensorsdata.cn/assets/img/topic/3p-1_171e8d5.png)
阿利斯泰尔
企业家、作家、演讲家，用户体验管理先锋公司Coradiant联合创始人。曾花大量时间研究各种规模的组织如何使用数据做出优良决策、加速创业过程。他职业生涯的大部分时间都是技术公司的产品经理，是O'Reilly Strata、TechWeb Cloud Connect、Interop企业云计算峰会、International Startup Festival（国际创业节）等5个国际知名技术大会的主要发起人。
本杰明
目前担任广受欢迎的二手货买卖应用[VarageSale](http://varagesale.com)产品管理副总，主要负责Web和移动平台的产品开发。他是Standout Jobs和Year One Labs公司联合创始人，曾积极指导众多创业公司和其他加速器项目。他创办了以精益创业、产品管理、创业公司和企业家精神为主题的博客[Instigator Blog](http://www.instigatorblog.com)，并定期在创业会议上演讲。他也是天使投资人、连续创业者，具有15年以上的互联网产品运营经验。

# 随记
-------------------------
我打赌你从未想过成功取决于你失败的能力。失败越快，进步越大。而成功的秘密是使用数据学习和快速迭代的能力。
  
=red 创业公司是一种组织，其存在的目的就是寻找可规模化和可重复的商业模式。
  
Peter F．Drucker名言：“ If you can't measure it, you can't manage it.”
  
值的付出的事业三条准则：擅长做的、喜欢做的、能赚钱的：
- 如果你喜欢且擅长做某事，却不能以此谋生，那应该学会将技能变现
- 如果你擅长某事且可以以之赚钱，但不喜欢它，学会说不
- 如果你喜欢做某事且可以以之赚钱，但还不是很擅长，学会把它做好

  
一个创业者如果想要生存下来，（对你产品的）需求、（打造产品的）能力、（实现产品的）欲望缺一不可。
  
渐进式的改变可以达到局部极限，创新则可能导致全局洗牌。
  
=red 对于创业公司而言，所选商业模式以及能够证明假设的相关证据，要远比商业计划书重要得多。商业计划书是写给银行家看的，商业模式才是创业者需要每天面对的内容。
  
创业公司要想取得大规模的成功，所需跨过的门槛远比市场领导者要高。市场领导者已经占据了市场，即便所占份额在下降，通常也不会太快。创业公司需要尽可能快地攻城略地。你必须要比市场领导者好上十倍才会获得人们的注意，这意味着你要在创造力、策略性、诡诈性和攻击性方面比市场领导者强上100倍。
  
寻求风险投资的创业CEO都应该记住造钱机器的故事，这是个确保你模拟风险投资人思维的好方法。
  
一家创业公司首先是一家旨在快速成长的公司。
  
尽管跟企业做生意可能极其无聊，但是这条道路几乎是金砖铺成的。
  
传统的产品经理进行盈亏分析来佐证他们提出的计划：做出一份令人信服的商业计划，只要有人相信它，他们就可以拿到启动资金。但是精益创业的思维方式不是这样：你推销的不是商业计划，而是商业模式，你不进行预测，而是进行分析，你要依靠分析来决定是放弃产品还是加倍投入。
  
我们不需要猜测，而是需要知道关注哪里。我们需要条理清晰的方法，让我们在每一步都能识别风险、量化风险、克服风险、最终通向增长。今天的领袖不知道全部的答案，但是知道该问什么样的问题。
提出好的问题，向前走。

# 精益创业循环：Build-Mesure-Learn
-------------------------
一篇很好的分析
https://steveblank.com/2015/05/06/build-measure-learn-throw-things-against-the-wall-and-see-if-they-work/
![精益创业循环](https://steveblank.files.wordpress.com/2015/05/build-measure-learn.jpg)
![精益创业循环](https://steveblank.files.wordpress.com/2015/05/ideas-build-code-measure.jpg)
![精益创业循环](https://steveblank.files.wordpress.com/2015/05/hypotheses-experiment.jpg)

# 精益画布
-------------------------
通过精益画布，让人很容易发现创业中最大的风险，并促使你理性、诚实地看待自己的创业。
# 9 components of a business on one page:
- # Customer Segments
List your target customers and users(Early Adopters)
- # Problem
List your customer's top 3 problems(Existing Alternatives)
- # Revenue Streams
List your sources of revenue
- # Solution
Outline a possible solution for each problem
- # Unique Value Propositions
Single, clear, compelling message that turns an unaware visitor into an interested prospect(High-Level Concept)
- # Channels
List your path to customers
- # Key Metrics
List the key numbers that tell you how your business is doing
- # Cost Structure
List your fixed and variable costs
- # Unfair Advantage
Something that can not be easily copied or bought
![精益画布](https://leanstack.com/assets/leancanvas-screenshot.png)
![精益画布](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510056623393&di=a624f68059e90f42af920578ef6c1f6b&imgtype=0&src=http%3A%2F%2Fwww.91cyl.com%2Fuploads%2Fallimg%2F160714%2F1-160G4150930.png)

# 第一关键指标OMTM
One Metric That Matters
当前阶段高于一切、需要你集中全部注意力的数字

# 精益创业的五大阶段
-------------------------
- # 移情阶段
关注MVP最小可行性产品是否打动用户
- # 黏性阶段
关注参与度、回头率等用户黏性
- # 病毒性阶段
关注口碑传播、病毒性传播系数
- # 营收阶段
关注每位客户营收
- # 规模化阶段
关注渠道、地域、营销

  
关注指标在很大程度上受特定阶段的影响，过早的关注某指标或优化无关紧要的内容必然会导致创业失败。
  
=info 这本书打开了一扇窗。世界上有两种企业家，一种看过《精益数据分析》，一种没看过。

2017.11.7

SSS;
/////////////////////////// 文档内容结束

echo $Parsedown->text($md);

require __DIR__.'/../_footer.php';
?>
