			<div style="text-align:center; margin-top:10px">
			<?php
			if ($_SERVER['REQUEST_URI'] !== '/') {
				if (isset($author) && isset($email)) {
				    echo '- <a href="mailto:'.$email.'">'.$author.'</a>';
				} else {
				    echo '- <a href="mailto:'.$_email.'">'.$_author.'</a>';
				}
			}
			?>
			</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/js/prettify/run_prettify.js"></script>
        </div>
    </div>
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
		$('#cl-wrapper').css("width", "1000px");
		$('#cl-wrapper').css("margin-top", "20px");
	} else {
		$('#cl-wrapper').css("width", "100%");
	}
	$("#cl-wrapper").css({ 
		left: ($(window).width() - $("#cl-wrapper").outerWidth())/2, 
	});        
	$(window).resize(function(){ 
		$("#cl-wrapper").css({ 
			left: ($(window).width() - $("#cl-wrapper").outerWidth())/2, 
		});        
	}); 
})
</script>
</body>
</html>