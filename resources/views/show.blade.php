@extends('layouts.app')

@section('content')
<div class="cl-mcont">

    <div class="row">
        <div class="col-sm-7 col-md-7" style="margin-left:21%">
            <div class="block-flat">
                <div class="header">                            
                    <h3>{{ $title or config('app.name', 'CleanWiki') }}</h3>
                </div>
                @for ($i = 0; $i < 10; $i++)
                <div class="content">
                    <div class="spacer spacer-bottom">
                        <button type="button" class="btn btn-default btn-rad">Default</button>
                        <button type="button" class="btn btn-primary btn-rad">Primary</button>
                        <button type="button" class="btn btn-success btn-rad">Success</button>
                        <button type="button" class="btn btn-info btn-rad">Info</button>
                        <button type="button" class="btn btn-warning btn-rad">Warning</button>
                        <button type="button" class="btn btn-danger btn-rad">Danger</button>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>

</div>
@endsection
