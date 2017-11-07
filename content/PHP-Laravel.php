<?php
/////////////////////////// 设置文档标题、作者、email
$title = 'PHP+Laravel培训';
$author = '犀利哥';
$email = '23771066@qq.com';

require __DIR__.'/../_header.php';

/////////////////////////// 文档内容开始
$md = <<<SSS

- 世界编程语言排行榜
https://www.tiobe.com/tiobe-index/
- Web开发排行榜
https://w3techs.com/technologies/overview/programming_language/all
- Nginx服务端开发语言排行
https://w3techs.com/technologies/breakdown/ws-nginx/programming_language
- 主流网站使用技术列表
https://en.wikipedia.org/wiki/Programming_languages_used_in_most_popular_websites
- Laravel市场占有率
https://laravel-china.org/topics/3550/laravel-market-share-data
- PHP手册
http://www.php.cn/manual/view/4.html
- Laravel
https://laravel.com/
https://laravel-china.org/
https://d.laravel-china.org/docs/5.5
- Win开发环境
http://note.youdao.com/share/?id=1f717a68d13bb12c538763014e4a4387&type=note
- Linux部署
http://note.youdao.com/share/?id=ae37ca49311a472ea1bac55e731e5859&type=note
- 后台开发过程
http://note.youdao.com/share/?id=aa3a3c7bf9641153a8a847625c5aeec2&type=note

SSS;
/////////////////////////// 文档内容结束

echo $Parsedown->text($md);

require __DIR__.'/../_footer.php';
?>
