<?php
// encoding
$encod = iconv_get_encoding("internal_encoding");

/////////////////////////// 设置文档标题
$title = '思想，是人一生中最大的幸福';

require __DIR__.'/_header.php';

/////////////////////////// 文档内容开始

// 列出content目录所有文件
// $dir=__DIR__.'/content';
// $file=scandir($dir);
// $md = '';
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
    - [Weex](/Weex)
    - [PHP-Laravel](/PHP-Laravel)
    - [Workerman]
    - [Tensorflow]
- 思考点滴
    - [数据驱动思维](/数据驱动思维)
- 读书笔记
    - [Principles](/Principles)
    - [How to Start a Startup](/How-to-Start-a-Startup)
    - [Diffusion of Innovations]
    - [ZERO TO ONE]
    - [THE INNOVATOR'S DILEMMA]
    - [重新定义公司](/重新定义公司)
    - [重新定义团队](/重新定义团队)
    - [助推](/助推)
    - [爆裂](/爆裂)
    - [精益数据分析](/精益数据分析)
    - [演讲的力量](/演讲的力量)
    - [影响力]
    - [细节]
    - [定位]
    - [匠人精神]
    - [失控]
    - [科技想要什么]
    - [技术元素]
    - [新经济新规则]
    - [黑天鹅]
    - [灰犀牛]
    - [反脆弱]
    - [乌合之众]
    - [断层线]
    - [第七感]
    - [思考，快与慢]
- 记忆碎片
    - [七十七天](/七十七天)
SSS;
echo $Parsedown->text($md);

require __DIR__.'/_footer.php';
?>
