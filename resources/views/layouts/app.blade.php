<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title or config('app.name', 'CleanWiki') }}</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/fonts/font-awesome-4/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/js/jquery.gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="/js/jquery.nanoscroller/nanoscroller.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap.switch/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="/js/jquery.select2/select2.css" />
    <link rel="stylesheet" type="text/css" href="/js/bootstrap.slider/css/slider.css" />
    <link rel="stylesheet" type="text/css" href="js\jquery.timeline\css\component.css" />
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet" />
</head>

<body>

    <!-- Fixed top navbar -->
    <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav user-nav">
                    <li>
                         <a class="navbar-brand" href="/">
                            @if (isset($title))
                            <i class="fa fa-chevron-left"></i>
                            @endif
                            &nbsp;{{ $title or config('app.name', 'CleanWiki') }}
                        </a>
                    </li>
                </ul>
                 <ul class="nav navbar-nav navbar-right user-nav">
                    @guest
                    <li><a href="{{ route('login') }}">登录</a></li>
                    @else
                    <li class="dropdown profile_menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="/images/avatar2.jpg" /><span>{{ Auth::user()->name }}</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">退出</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div id="cl-wrapper" class="fixed-menu">
        <!-- Main Content -->
        <div class="container-fluid" id="pcont">
            @yield('content')
        </div>
    </div>

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

</body>
</html>