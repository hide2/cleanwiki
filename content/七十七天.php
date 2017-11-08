<?php
/////////////////////////// 设置文档标题、作者、email
$title = '七十七天';
$author = '犀利哥';
$email = '23771066@qq.com';

require __DIR__.'/../_header.php';

/////////////////////////// 文档内容开始
$md = <<<SSS
![七十七天](https://img3.doubanio.com/view/photo/raw/public/p2500428810.jpg)
  
<video style="width: 100%" tabindex="-1" preload="auto" autoplay="">
<source src="http://vt1.doubanio.com/201711081141/2c4561d5777636f1267cf836a2f447d3/view/movie/M/302230166.mp4" title="" type="video/mp4">
</video>
  
浩瀚无垠的宇宙里，在短短的一生中，鼓起勇气，做自己想做的事，成为想成为的自己。
  
2017.11.8

SSS;
/////////////////////////// 文档内容结束

echo $Parsedown->text($md);

require __DIR__.'/../_footer.php';
?>
