<?php
/////////////////////////// 设置文档标题、作者、email
$title = 'Demo';
$author = '犀利哥';
$email = '23771066@qq.com';

require __DIR__.'/../_header.php';

/////////////////////////// 文档内容开始
$syntax = <<<SSS
# 【语法】
-------------------------
- 标题字，以#号加空格开始
- 删除字，以\~\~开始和\~\~号结束
- 分隔线，3个或3个以上减号---
- 换行，使用两个空格的空行
- 列表，以-号加空格开始
- 颜色，=red xx，=blue xx
- 高亮，\`xx\`
- 链接，\[文字\]\(url\)
- 图片，\!\[文字\]\(图片url\)
- 表格，如下：
\|任务\|时间\|数量\|
\|---\|---\|---\|
\|Filet Mignon\|05/14/2013\|$5,230.000\|
\|Blue beer\|16/08/2013\|$5,230.000\|
\|T-shirts\|22/12/2013\|$5,230.000\|
- 代码块，如下：
\`\`\`
namespace App\Http\Controllers;
\`\`\`
- 信息块，=info xx
- 警告块，=warn xx
- 折线图，=line 1\|100\|2\|150
- 柱状图，=bar 1\|100\|2\|150
- 饼状图，=pie Google\|100\|Twitter\|150
SSS;
echo $Parsedown->text($syntax);
?>

<?php
$md = <<<SSS
# 【示例】
-------------------------
# 标题字
~~删除字~~
分隔线：

-------------------------
下面有1个换行
  
下面有3个换行
  
  
  
列表：
- 前总统比尔·克林顿在2004年的健康危机之后开始了无肉饮食
- 推特的联合创始人比兹·斯通10年来一直吃纯素食品
- 嘻哈音乐巨头拉塞尔·西蒙斯由于健康和环境的原因而放弃肉食

  
=red 这是红色字
=blue 这是蓝色字
这是`高亮`字
[这是一个链接](http://laravel.com)
  
![文字](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1509548418533&di=0c28949757fffb23498cd6f0d5201edf&imgtype=0&src=http%3A%2F%2Fe.hiphotos.baidu.com%2Fimage%2Fpic%2Fitem%2F9f2f070828381f305d95e4e5a3014c086f06f0ea.jpg)
![文字](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510143505&di=de3a7504ae2084b33f13df4823fffb84&imgtype=jpg&er=1&src=http%3A%2F%2Fimgtu.5011.net%2Fuploads%2Fcontent%2F20170508%2F3906321494233338.jpg)

|任务|时间|数量|
|---|---|---|
|Filet Mignon|05/14/2013|$5,230.000|
|Blue beer|16/08/2013|$5,230.000|
|T-shirts|22/12/2013|$5,230.000|

```
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WikiController extends Controller
{
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wiki');
    }
    public function show()
    {
        return view('show');
    }
}
```
=info 这是一个信息块
=warn 这是一个警告块
- 折线图，如下：
=line 1|100|2|150|3|180|4|120|5|300|6|200|7|180|8|150
- 柱状图，如下：
=bar 1|100|2|150|3|180|4|120|5|300|6|200|7|180|8|150
- 饼状图，如下：
=pie Google|38|Twitter|18|Facebook|14|Apple|30

SSS;
/////////////////////////// 文档内容结束

echo $Parsedown->text($md);

require __DIR__.'/../_footer.php';
?>
