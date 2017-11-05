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
          <input id="wiki_title" style="border:none;outline:none;font-size:24px;font-weight:200;margin-bottom:10px;width:100%" name="wiki_title" value="点击编辑标题">
          <input id="wiki_tag" style="border:none;outline:none;font-size:24px;font-weight:200;margin-bottom:10px;width:100%" name="tag" value="点击编辑tag">
					<input id="wiki_url" style="border:none;outline:none;font-size:24px;font-weight:200;margin-bottom:10px;width:100%" name="url" value="点击编辑URL">
				</div>
        <div id="wiki_id"></div>
				<div id="wiki_content" class="content inline-editable" contenteditable="true">
<h1>点击编辑内容</h1>

# 标题字</br>

~~删除字~~</br>

分隔线：</br>

-------------------------</br>

列表：</br>
- 前总统比尔·克林顿在2004年的健康危机之后开始了无肉饮食</br>
- 推特的联合创始人比兹·斯通10年来一直吃纯素食品</br>
- 嘻哈音乐巨头拉塞尔·西蒙斯由于健康和环境的原因而放弃肉食</br>

=red 这是红色字</br>

=blue 这是蓝色字</br>

这是`高亮`字</br>

[这是一个链接](http://laravel.com)</br>

![文字](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1509548418533&di=0c28949757fffb23498cd6f0d5201edf&imgtype=0&src=http%3A%2F%2Fe.hiphotos.baidu.com%2Fimage%2Fpic%2Fitem%2F9f2f070828381f305d95e4e5a3014c086f06f0ea.jpg)</br>

![文字](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510143505&di=de3a7504ae2084b33f13df4823fffb84&imgtype=jpg&er=1&src=http%3A%2F%2Fimgtu.5011.net%2Fuploads%2Fcontent%2F20170508%2F3906321494233338.jpg)</br>

|任务|时间|数量|</br>
|---|---|---|</br>
|Filet Mignon|05/14/2013|$5,230.000|</br>
|Blue beer|16/08/2013|$5,230.000|</br>
|T-shirts|22/12/2013|$5,230.000|</br>

```</br>
namespace App\Http\Controllers;</br>
use Illuminate\Http\Request;</br>
class WikiController extends Controller</br>
{</br>
    public function show()</br>
    {</br>
        return view('show');</br>
    }</br>
}</br>
```</br>

=info 这是一个信息块</br>
=warn 这是一个警告块</br>

- 折线图，如下：</br>
=line 1|100|2|150|3|180|4|120|5|300|6|200|7|180|8|150</br>

- 柱状图，如下：</br>
=bar 1|100|2|150|3|180|4|120|5|300|6|200|7|180|8|150</br>

- 饼状图，如下：</br>
=pie Google|38|Twitter|18|Facebook|14|Apple|30</br>
				</div>
			</div>
        </div>
    </div>

</div>

<script type="text/javascript">
function show() {
  var id = $('#wiki_id').val();
  var title = $('#wiki_title').val();
  var tag = $('#wiki_tag').val();
  var url = $('#wiki_url').val();
  var content = $('#wiki_content').text();
  if(title != '点击编辑标题') {
    $.post("/create", {'_token':'{{csrf_token()}}', 'id':id, 'title':title, 'content':content, 'tag':tag, 'url':url}, function(result){
      $("title").html(title);
      $(".navbar-brand span").html(title);
      alert(result);
    });
  }
}
// setInterval(show, 2000);// 注意函数名没有引号和括弧！
</script>
@endsection
