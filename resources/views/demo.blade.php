@extends('layouts.app')

@section('content')
<?php
$Parsedown = new Parsedown();
?>
<link type="text/css" rel="stylesheet" href="/js/prettify/prettify.css" />

<div class="cl-mcont">

    <div class="row">
        <div class="col-sm-7 col-md-7" style="margin-left:21%">
            <div class="block-flat">
                <div class="header">                            
                    <h3>{{ $title or config('app.name', 'CleanWiki') }}</h3>
                </div>
                <div class="content markdown">
                    <div class="spacer spacer-bottom">
<?php
$table = <<<SSS
# 【语法】
-------------------------
- 标题字，以#号加空格开始
- 删除字，以\~\~开始和\~\~号结束
- 分隔线，3个或3个以上减号---
- 列表，以-号加空格开始
- 空行？
- 缩进？
- 颜色，< span class=red > xx< /span >，< span class=blue >xx< /span >
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
- info？信息块，\[info\]xx\[info\]
- warn？警告块，\[warn\]xx\[warn\]
- 折线图，如下：
\|\|\|line\|\|\|
\|1\|100\|
\|2\|150\|
- 柱状图，如下：
\|\|\|bar\|\|\|
\|1\|100\|
\|2\|150\|
- 饼状图，如下：
\|\|\|pie\|\|\|
\|Google\|50\|
\|Twitter\|8\|
SSS;
echo $Parsedown->text($table);
?>

<?php
$md = <<<SSS
# 【示例】
-------------------------

# 标题字

~~删除字~~

分隔线：

-------------------------

列表：
- 前总统比尔·克林顿在2004年的健康危机之后开始了无肉饮食
- 推特的联合创始人比兹·斯通10年来一直吃纯素食品
- 嘻哈音乐巨头拉塞尔·西蒙斯由于健康和环境的原因而放弃肉食

空行？

缩进？

这是<span class=red>红色</span>字，这是<span class=blue>蓝色</span>字

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

iii这是一个信息块iii

~~warn这是一个警告块~warn

- 折线图，如下：
\|\|\|line\|\|\|
\|1\|100\|
\|2\|150\|

- 柱状图，如下：
\|\|\|bar\|\|\|
\|1\|100\|
\|2\|150\|

- 饼状图，如下：
\|\|\|pie\|\|\|
\|Google\|50\|
\|Twitter\|8\|
SSS;
echo $Parsedown->text($md);
?>


                        <div class="alert alert-info alert-white rounded">
                            <div class="icon"><i class="fa fa-info-circle"></i></div>
                            [info]这是一个重要info这是一个重要info[/info]
                        </div>
                        <div class="alert alert-danger alert-white rounded">
                            <div class="icon"><i class="fa fa-warning"></i></div>
                            [warn]这是一个重要warning这是一个重要warning[/warn]
                        </div>
                        
                        这是一个折线图</br>
                        |||line|||</br>
                        |1|100|</br>
                        |2|150|</br>
                        <div class="content blue-chart">
                            <div id="zhexiantu" style="height:180px;"></div>
                        </div>
<script type="text/javascript">
$(document).ready(function(){
    var testData1 = [
        [1, 100],
        [2, 150],
        [3, 50],
        [4, 80],
        [5, 180],
        [6, 200],
        [7, 250],
        [8, 220],
        [9, 260],
        [10, 300],
    ];
    $.plot($("#zhexiantu"), [{
            data: testData1,
        }
        ], {
            series: {
                lines: {
                    show: true,
                    lineWidth: 2, 
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 0.2
                        }, {
                            opacity: 0.01
                        }]
                    } 
                },
                points: {
                    show: true
                },
            },
            grid: {
                labelMargin: 10,
                axisMargin: 500,
                hoverable: true,
                clickable: true,
                tickColor: "rgba(255,255,255,0.22)",
                borderWidth: 0
            },
            colors: ["#FFFFFF", "#4A8CF7", "#52e136"],
            xaxis: {
                tickDecimals: 0
            },
            yaxis: {
                tickDecimals: 0
            }
        }
    );
});

function showTooltip(x, y, contents) {
$("<div id='tooltip'>" + contents + "</div>").css({
    position: "absolute",
    display: "none",
    top: y + 5,
    left: x + 5,
    border: "1px solid #000",
    padding: "5px",
    'color':'#fff',
    'border-radius':'2px',
    'font-size':'11px',
    "background-color": "#000",
    opacity: 0.80
    }).appendTo("body").fadeIn(200);
} 

var previousPoint = null;
$("#zhexiantu").bind("plothover", function (event, pos, item) {
    if (item) {
        if (previousPoint != item.dataIndex) {
            previousPoint = item.dataIndex;
            $("#tooltip").remove();
            var x = item.datapoint[0],
            y = item.datapoint[1];
            showTooltip(item.pageX, item.pageY, x + " = " + y);
        }
    } else {
        $("#tooltip").remove();
        previousPoint = null;
    }
}); 
</script>

                        这是一个柱状图</br>
                        |||bar|||</br>
                        |1|100|</br>
                        |2|150|</br>
                        <div class="content red-chart">
                            <div id="zhuzhuangtu" style="height:180px;"></div>
                        </div>
<script type="text/javascript">
$(document).ready(function(){
    var testData2 = [
        [1, 100],
        [2, 150],
        [3, 50],
        [4, 80],
        [5, 180],
        [6, 200],
        [7, 250],
        [8, 220],
        [9, 260],
        [10, 300],
        [11, 100],
        [12, 150],
        [13, 50],
        [14, 80],
        [15, 180],
        [16, 200],
        [17, 250],
        [18, 220],
        [19, 260],
        [20, 300],
    ];
    $.plot($("#zhuzhuangtu"), [{
        data: testData2,
      }
      ], {
        series: {
            bars: {
                show: true,
                barWidth: 0.6,
                lineWidth: 0,
                fill: true,
                hoverable: true,
                fillColor: {
                    colors: [{
                        opacity: 1
                    }, {
                        opacity: 1
                    }]
                } 
            },
        },
        grid: {
            labelMargin: 10,
            axisMargin: 500,
            hoverable: true,
            clickable: true,
            tickColor: "rgba(0,0,0,0.15)",
            borderWidth: 0
        },
        colors: ["#FFFFFF", "#FFFFFF", "#52e136"],
        xaxis: {
            tickDecimals: 0
        },
        yaxis: {
            tickDecimals: 0
        }
    });
});
var previousPoint = null;
$("#zhuzhuangtu").bind("plothover", function (event, pos, item) {
    if (item) {
        if (previousPoint != item.dataIndex) {
            previousPoint = item.dataIndex;
            $("#tooltip").remove();
            var x = item.datapoint[0],
            y = item.datapoint[1];
            showTooltip(item.pageX, item.pageY, x + " = " + y);
        }
    } else {
        $("#tooltip").remove();
        previousPoint = null;
    }
}); 
</script>
                        这是一个饼状图</br>
                        |||pie|||</br>
                        |Google|50|</br>
                        |Twitter|8|</br>
                        <div id="bingzhuangtu" style="height:300px;"></div>
<script type="text/javascript">
$(document).ready(function(){
    var testData3 = [
        { label: "Google", data: 50},
        { label: "Dribbble", data: 7},
        { label: "Twitter", data: 8},
         { label: "Youtube", data: 9},
        { label: "Microsoft", data: 14},
        { label: "Apple", data: 13},
        { label: "Amazon", data: 10},
        { label: "Facebook", data: 5}
  ]; 
  $.plot('#bingzhuangtu', testData3, {
        series: {
            pie: {
                show: true,
                innerRadius: 0.27,
                shadow:{
                    top: 5,
                    left: 15,
                    alpha:0.3
                },
                stroke:{
                    width:0
                },
                label: {
                    show: true,
                    formatter: function (label, series) {
                        return '<div style="font-size:12px;text-align:center;padding:2px;color:#333;">' + label + '</div>';
                    }
                },
                highlight:{
                    opacity: 0.08
                }
            }
        },
        grid: {
            hoverable: true,
            clickable: true
        },
        colors: ["#5793f3", "#dd4d79", "#bd3b47","#dd4444","#fd9c35","#fec42c","#d4df5a","#5578c2"],
        legend: {
            show: false
        }
    });
});
</script>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="/js/prettify/run_prettify.js"></script>
@endsection
