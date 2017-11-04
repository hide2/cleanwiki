@extends('layouts.app')

@section('content')
<?php
$title = '新页面';
$Parsedown = new Parsedown();
?>
<div class="cl-mcont">

    <div class="row">
        <div class="col-sm-7 col-md-7" style="margin-left:21%">
        	<a style="float:right;margin:10px 10px 0 0;" href="/demo" target="_blank"><i class="fa fa-question-circle"></i> 语法帮助</a>
            <div class="block-flat"">
				<div class="header">							
					<input id="wiki_title" style="border:none;outline:none;font-size:24px;font-weight:200;margin-bottom:10px;width:100%" name="a" value="点击编辑标题">
				</div>
				<div id="wiki_content" class="content inline-editable" contenteditable="true">
<h1>点击编辑内容</h1></br>
- 标题字，以#号加空格开始</br>
- 删除字，以~~开始和~~号结束</br>
- 分隔线，3个或3个以上减号---</br>
- 列表，以-号加空格开始</br>
- 颜色，< span class=red > xx< /span >，< span class=blue >xx< /span ></br>
- 高亮，`xx`</br>
- 链接，[文字](url)</br>
- 图片，![文字](图片url)</br>
- 表格，如下：</br>
|任务|时间|数量|</br>
|---|---|---|</br>
|Filet Mignon|05/14/2013|$5,230.000|</br>
|Blue beer|16/08/2013|$5,230.000|</br>
|T-shirts|22/12/2013|$5,230.000|</br>
- 代码块，如下：</br>
```</br>
namespace AppHttpControllers;</br>
```</br>
- 信息块，=info xx</br>
- 警告块，=warn xx</br>
- 折线图，=line 1|100|2|150</br>
- 柱状图，=bar 1|100|2|150</br>
- 饼状图，=pie Google|100|Twitter|150</br>
				</div>
			</div>
        </div>
    </div>

</div>

<script type="text/javascript">
$(function(){
function show(){
   var title = $('#wiki_title').val();
   var content = $('#wiki_content').text();
}
setInterval(show, 3000);// 注意函数名没有引号和括弧！
});
</script>
@endsection
