<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! Html::style('css/bootstrap.min.css') !!}

    {!! Html::style('css/bootstrap-theme.min.css') !!}
    {!! Html::style('css/main.css') !!}

    {!! Html::script('js/modernizr-2.8.3-respond-1.4.2.min.js') !!}
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
@include('elements.nav')
<div class="container">

     @yield('content')

</div> <!-- /container -->
@include('elements.footer')

    {!! Html::script('js/jquery-1.11.2.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/main.js') !!}
</body>
</html>
