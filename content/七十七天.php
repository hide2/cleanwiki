<?php
/////////////////////////// 设置文档标题、作者、email
$title = '七十七天';
$author = '犀利哥';
$email = '23771066@qq.com';

require __DIR__.'/../_header.php';

/////////////////////////// 文档内容开始
$md = <<<SSS
![七十七天](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510123996447&di=271c533545c7993b555039e80963cdb5&imgtype=0&src=http%3A%2F%2Fcimage.tianjimedia.com%2FuploadImages%2FthirdImages%2F2017%2F292%2F8SLZ5AHAY9G1.jpg)
![七十七天](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510124116172&di=a80ddd37c789669aa5ffdad40b262d40&imgtype=0&src=http%3A%2F%2Fnpic7.fangtoo.com%2Fcn%2Fzixun%2Fzh-chs%2F2017-10%2F26%2F353393-201710261309344519.jpg)
<embed src="https://imgcache.qq.com/tencentvideo_v1/playerv3/TPout.swf?max_age=86400&v=20161117&vid=p0565rg53v9&auto=0" allowFullScreen="true" quality="high" width="100%" height="600" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>

浩瀚无垠的宇宙里，在短短的一生中，鼓起勇气，做自己想做的事，成为想成为的自己。
  
2017.11.8

SSS;
/////////////////////////// 文档内容结束

echo $Parsedown->text($md);

require __DIR__.'/../_footer.php';
?>
