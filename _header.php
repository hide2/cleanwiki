<?php
// markdown
require __DIR__.'/_parsedown.php';
$Parsedown = new Parsedown();
$_author = '犀利哥';
$_email = '23771066@qq.com';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="pLFGpYreR5ZQl3ci21T475pkiDETpKoqIcGlHwVk">

    <title><?php echo(isset($title) ? $title : '无标题'); ?></title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/fonts/font-awesome-4/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/js/jquery.gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="/js/jquery.nanoscroller/nanoscroller.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap.switch/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="/js/jquery.select2/select2.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap.slider/css/slider.css" />
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet" />
    <!-- Markdown CSS -->
    <link href="/css/markdown.css" rel="stylesheet" />

    <!-- JavaScript -->
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery.gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="/js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
    <script type="text/javascript" src="/js/behaviour/general.js"></script>
    <script type="text/javascript" src="/js/jquery.ui/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/jquery.sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="/js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
    <script type="text/javascript" src="/js/jquery.nestable/jquery.nestable.js"></script>
    <script type="text/javascript" src="/js/bootstrap.switch/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="/js/jquery.select2/select2.min.js"></script>
    <script type="text/javascript" src="/js/skycons/skycons.js"></script>
    <script type="text/javascript" src="/js/bootstrap.slider/js/bootstrap-slider.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript">
    $(document).ready(function(){
        //initialize the javascript
        App.init({
            nanoScroller: false
        });
        App.dashBoard();
    });
    </script>
    <script type="text/javascript" src="/js/behaviour/voice-commands.js"></script>
    <script type="text/javascript" src="/js/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.flot/jquery.flot.js"></script>
    <script type="text/javascript" src="/js/jquery.flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="/js/jquery.flot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="/js/jquery.flot/jquery.flot.labels.js"></script>
</head>

<body>

    <!-- Fixed top navbar -->
    <!-- <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <i class="fa fa-chevron-left"></i>
                    <span><?php echo(isset($title) ? $title : '无标题'); ?></span>
                </a>
            </div>
        </div>
    </div> -->

    <!-- Content -->
    <div id="cl-wrapper" class="fixed-menu">
        <!-- Main Content -->
        <div class="container-fluid" id="pcont">
            <link type="text/css" rel="stylesheet" href="/js/prettify/prettify.css" />
<script type="text/javascript">
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
</script>
<div class="cl-mcont">
    <div class="block-flat">
        <div class="header">                            
            <h3><a class="header_a" href="/"><?php echo(isset($title) ? $title : '无标题'); ?></a></h3>
        </div>
        <div class="content markdown">