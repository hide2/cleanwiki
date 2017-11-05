@extends('layouts.app')

@section('content')
<?php
$Parsedown = new Parsedown();
?>
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

    <div class="row">
        <div class="col-sm-7 col-md-7" style="margin-left:21%">
            <div class="block-flat">
                <div class="header">                            
                    <h3>{{ $title }}</h3>
                </div>
                <div class="content markdown">
                    <div class="spacer spacer-bottom">
                        <?php echo $Parsedown->text($wiki->content); ?>
                        {{$wiki->user->name}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="/js/prettify/run_prettify.js"></script>
@endsection
