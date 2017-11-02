@extends('layouts.app')

@section('content')

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
                        <div class="biaotizi">#号开头代表标题字</div>
                        三个减号代表分隔线---
                        <div class="fengexian"></div>
                        1个回车代表1个换行</br>
                        2个回车代表2个换行</br></br>
                        3个回车代表3个换行</br></br></br>
                        *开头表示列表
                        <ul class="liebiao">
                            <li>*前总统比尔·克林顿在2004年的健康危机之后开始了无肉饮食</li>
                            这里穿插了非列表内容这里穿插了非列表内容
                            <li>*推特的联合创始人比兹·斯通10年来一直吃纯素食品</li>
                            <li>*嘻哈音乐巨头拉塞尔·西蒙斯由于健康和环境的原因而放弃肉食</li>
                            <li>*纽瓦克市市长科里·布克已经吃素20年</li>
                        </ul>
                        </br>
                        下面是一些缩进
                        <div class="suojin1">[tab1]1个开头代表1个缩进[/tab1]</div>
                        <div class="suojin2">[tab2]2个开头代表2个缩进[/tab2]</div>
                        <div class="suojin3">[tab3]3个开头代表3个缩进[/tab3]</div>
                        <div class="suojin4">[tab4]4个开头代表4个缩进[/tab4]</div>
                        <br/>
                        这是<span class="color-red">[red]红色红色红色红色红色[/red]</span>字
                        <br/>
                        这是<span class="color-blue">[blue]蓝色蓝色蓝色蓝色蓝色字[/blue]</span>字
                        <br/>
                        这是<span class="highlight">[high]高亮abcdef高亮abcdef[/high]</span>字
                        <div class="alert alert-info alert-white rounded">
                            <div class="icon"><i class="fa fa-info-circle"></i></div>
                            [info]这是一个重要info这是一个重要info[/info]
                        </div>
                        <div class="alert alert-danger alert-white rounded">
                            <div class="icon"><i class="fa fa-warning"></i></div>
                            [warn]这是一个重要warning这是一个重要warning[/warn]
                        </div>
                        <a href="http://laravel-china.org">[这是一个链接](http://laravel-china.org)</a>
                        </br>
                        !(http://xxx.这是一张图片的URL地址.xxx)</br>
                        <img style="max-width:100%" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1509548418533&di=0c28949757fffb23498cd6f0d5201edf&imgtype=0&src=http%3A%2F%2Fe.hiphotos.baidu.com%2Fimage%2Fpic%2Fitem%2F9f2f070828381f305d95e4e5a3014c086f06f0ea.jpg"/>
                        !(http://xxx.这是一张图片的URL地址.xxx)</br>
                        <img style="max-width:100%" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510143505&di=de3a7504ae2084b33f13df4823fffb84&imgtype=jpg&er=1&src=http%3A%2F%2Fimgtu.5011.net%2Fuploads%2Fcontent%2F20170508%2F3906321494233338.jpg"/>
                        </br>
                        这是一个表格</br>
                        ||任务||时间||数量||</br>
                        |Filet Mignon|05/14/2013|$5,230.000|</br>
                        |Blue beer|16/08/2013|$5,230.000|</br>
                        |T-shirts|22/12/2013|$5,230.000|</br>
                        <table>
                            <thead>
                                <tr>
                                    <th>任务</th>
                                    <th>时间</th>
                                    <th>数量</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Filet Mignon</td>
                                    <td>05/14/2013</td>
                                    <td>$5,230.000</td>
                                </tr>
                                <tr>
                                    <td>Blue beer</td>
                                    <td>16/08/2013</td>
                                    <td>$5,230.000</td>
                                </tr>
                                <tr>
                                    <td>T-shirts</td>
                                    <td>22/12/2013</td>
                                    <td>$5,230.000</td>
                                </tr>
                            </tbody>
                        </table>
                        [code]</br>这是一段代码块</br>这是一段代码块第二行</br>[/code]</br>
                        <pre class="prettyprint linenums">
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
}</pre>

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
