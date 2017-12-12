<?php
/////////////////////////// 设置文档标题、作者、email
$title = '工作十年记';
$author = '犀利哥';
$email = '23771066@qq.com';

require __DIR__.'/../_header.php';

/////////////////////////// 文档内容开始
$md = <<<SSS
工作十年记
此时夜幕深沉，小黄豆和妈妈们都已酣然入睡，黑暗中只有一台显示器和一部手机的柔弱亮光伴着窗外街灯交相辉映。
2007-2017，来北京工作十年，收获了媳妇孩子，两套房子一辆车子，以及几段大起大落的经历。
下一个十年，希望能够实现财富自由，进而实现精神自由，成就自我，进而成就他人。
去到想去的地方。

2017.12.12

SSS;
/////////////////////////// 文档内容结束

echo $Parsedown->text($md);

require __DIR__.'/../_footer.php';
?>

<script type="text/javascript">
// PC/手机兼容阅读视图
$(function(){
	function detectOS() {
	    var sUserAgent = navigator.userAgent;
	    var isWin = (navigator.platform == "Win32") || (navigator.platform == "Windows");
	    var isMac = (navigator.platform == "Mac68K") || (navigator.platform == "MacPPC") || (navigator.platform == "Macintosh") || (navigator.platform == "MacIntel");
	    if (isWin) return "Win";
	    if (isMac) return "Mac";
	    return "other";
	}
	if(detectOS() == "Win" || detectOS() == "Mac") {
		$('#video').css("height", "500px");
	}
})
</script>