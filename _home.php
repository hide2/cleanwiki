<?php
/////////////////////////// 设置文档标题
$title = '索引';

require __DIR__.'/_header.php';

/////////////////////////// 文档内容开始

$dir=__DIR__.'/content';
$file=scandir($dir);
$md = '';
foreach ($file as $f) {
    if (preg_match('/\.php/', $f)) {
    	$f = explode('.php', $f)[0];
        $f = trim($f);
        $md = $md."- [".$f."](http://".$_SERVER["HTTP_HOST"]."/".$f.")\r\n";
    }
}
echo $Parsedown->text($md);

require __DIR__.'/_footer.php';
?>