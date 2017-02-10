<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> {{config('settings.title')}} </title>
    <meta name="description" content="">
    <meta name="author" content="{{config('settings.author')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/font-awesome.min.css')}}">

@yield('addCss')


<!-- FAVICONS -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
</head>

<body class="">

<!-- HEADER -->
@include('layouts.header')

<!-- MAIN CONTENT -->
<div id="content">

    <div class="container">
        @include('errors.validation')
    </div>

    <div class="container">
        <h1>@yield('title')</h1>
    </div>

    <div class="container">
        <ul class="list-unstyled list-inline">
            <li><a href="{{route('home')}}">Home</a></li>
            @yield('breadcrumb')
        </ul>
    </div>

    <!-- MAIN PANEL -->
    @yield('content')
</div>
{{-- end content--}}

@include('layouts.footer')


<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="{{asset('assets/js/libs/jquery-2.1.1.min.js')}}"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="{{asset('assets/js/libs/jquery-ui-1.10.3.min.js')}}"><\/script>');
    }
</script>

<!-- IMPORTANT: APP CONFIG -->
<script src="{{asset('assets/js/app.config.js')}}"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="{{asset('assets/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="{{asset('assets/js/notification/SmartNotification.min.js')}}"></script>

<!-- JARVIS WIDGETS -->
<script src="{{asset('assets/js/smartwidgets/jarvis.widget.min.js')}}"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

@yield('addJs')

<!-- MAIN APP JS FILE -->
<script src="{{asset('assets/js/app.min.js')}}"></script>

<script>
    $(document).ready(function () {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        pageSetUp();

    });
</script>

</body>

</html>