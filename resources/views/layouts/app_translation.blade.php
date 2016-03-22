
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Tradokey</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Tradokey">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>


    {!! HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('assets/plugins/font-awesome/css/font-awesome.css') !!}
    {!! HTML::style('assets/plugins/flexslider/flexslider.css') !!}
    {!! HTML::style('assets/css/styles.css') !!}
    {!! HTML::style('styles/tradokey.css') !!}

    {!! HTML::style('vendor/fontawesome/css/font-awesome.css') !!}
    {!! HTML::style('vendor/metisMenu/dist/metisMenu.css') !!}
    {!! HTML::style('vendor/animate.css/animate.css') !!}
    {!! HTML::style('fontello/css/fontello.css') !!}

            <!-- App styles -->
    {!! HTML::style('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') !!}
    {!! HTML::style('fonts/pe-icon-7-stroke/css/helper.css') !!}

    @yield('add_styles')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="contact-page">
<div class="wrapper">
    @include('layouts.header')

    @yield('content')

</div><!--//wrapper-->
@include('layouts.footer')


        <!-- Javascript -->
{!! HTML::script('assets/plugins/jquery-1.11.2.min.js') !!}
{!! HTML::script('assets/plugins/jquery-migrate-1.2.1.min.js') !!}
{!! HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') !!}
{!! HTML::script('assets/plugins/bootstrap-hover-dropdown.min.js') !!}
{!! HTML::script('assets/plugins/back-to-top.js') !!}
{!! HTML::script('assets/plugins/jquery-placeholder/jquery.placeholder.js') !!}
{!! HTML::script('assets/plugins/FitVids/jquery.fitvids.js') !!}
{!! HTML::script('assets/plugins/flexslider/jquery.flexslider-min.js') !!}

{!! HTML::script('assets/plugins/jquery.validate.min.js') !!}
{!! HTML::script('http://maps.google.com/maps/api/js?sensor=true') !!}
{!! HTML::script('assets/plugins/gmaps/gmaps.js') !!}
{!! HTML::script('assets/js/contact.js') !!}
{!! HTML::script('assets/js/main.js') !!}






@yield('add_scripts')

</body>
</html>

