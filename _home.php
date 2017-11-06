<?php
// encoding
$encod = iconv_get_encoding("internal_encoding");

/////////////////////////// 设置文档标题
$title = '索引';

require __DIR__.'/_header.php';

/////////////////////////// 文档内容开始

$dir=__DIR__.'/content';
$file=scandir($dir);
$md = '';
// foreach ($file as $f) {
//     if (preg_match('/\.php/', $f)) {
//         $f = explode('.php', $f)[0];
//         if ($encod !== 'UTF-8') {
//             $f = iconv('gbk', 'utf-8', $f);
//         }
//         $f = trim($f);
//         $md = $md."- [".$f."](http://".$_SERVER["HTTP_HOST"]."/".$f.")\r\n";
//     }
// }
$md = <<<SSS
- 技术资料
    - [Demo](/Demo)
    - [PHP-Laravel](/PHP-Laravel)
- 读书笔记
    - [重新定义公司](/重新定义公司)
SSS;
echo $Parsedown->text($md);

require __DIR__.'/_footer.php';
?>
