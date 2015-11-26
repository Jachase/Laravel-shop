<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title or 'Laravel' }}</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        {{--	<link href="{{ asset('css/common.css') }}" rel="stylesheet">--}}
        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        @section("link")
            <link rel="stylesheet" href="{{ asset('backend/css/common.css') }}">
        @show

                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    @if(isset($tips))
    <div class="place bg-info">
        <span>位置</span>
        <ul>
            @foreach($tips as $k=>$v)
                @if(!is_null($v))
                    <li><a href="{{ $v }}">{{ $k }}</a></li>
                @else
                    <li>{{ $k }}</li>
                @endif
            @endforeach
        </ul>
    </div>
    @endif
    @if(Session::has('flash_message'))
        <div class="alert flash-message text-center alert-{!! Session::get('flash_type', 'info') !!} alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! Session::get('flash_message') !!}
        </div>
    @endif

    @yield('content')

    @section("footer")
            <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $().ready(function(){
            $('.flash-message').delay(5000).slideUp();
        });
    </script>
    @show
    </body>
    </html>
