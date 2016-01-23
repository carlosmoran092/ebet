<!DOCTYPE html>
<html >
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{!! csrf_token() !!}" />

    <!-- Page title -->
    <title>TRADOKEY</title>

    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    {!! HTML::style('vendor/fontawesome/css/font-awesome.css') !!}
    {!! HTML::style('vendor/metisMenu/dist/metisMenu.css') !!}
    {!! HTML::style('vendor/animate.css/animate.css') !!}
    {!! HTML::style('vendor/bootstrap/dist/css/bootstrap.css') !!}
    {!! HTML::style('fontello/css/fontello.css') !!}
    {!! HTML::style('styles/admin.css') !!}

    <!-- App styles -->
    {!! HTML::style('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') !!}
    {!! HTML::style('fonts/pe-icon-7-stroke/css/helper.css') !!}
    {!! HTML::style('styles/style.css') !!}
    @yield('add_style')
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    {!! HTML::script('vendor/nicescroll/jquery.nicescroll.min.js') !!}
<script>
$(document).ready(  function() {  $("html").niceScroll();  });
</script>

</head>
<body class="fixed-sidebar fixed-navbar">

<div class="splash"> <div class="splash-title"><h1 class="title-trw">TRADOKEY</h1>
        {!! HTML::image('images/loading-bars.svg', 'loading', ['width'=>'64','height'=>'64']) !!}
    </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->

<div id="header">

    <div id="logo" class="light-version">
        <span class="text-title-tw">
            <a href="administration">TRADOKEY</a> 
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="icon-menu-2"></i></div>
        <div class="small-logo">
            <span class="text-primary">
            TRADOKEY</span>
        </div>

        <div class="mobile-menu">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="login.html">Login</a>
                    </li>
                    <li>
                        <a class="" href="login.html">Logout</a>
                    </li>
                    <li>
                        <a class="" href="profile.html">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                <li class="dropdown">
                    <a href="logout">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Navigation -->

<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="profile">
                {!! HTML::image('images/profile.jpg', 'profile', ['class'=>'img-circle m-b']) !!}

            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase">Walter G</span>

             
            </div>
        </div>

        <ul class="nav trw-font-menu" id="side-menu">

            <li><a href="/quotes"><span class="nav-label">Quotes</span></a></li>
            <li><a href="/orders"> <span class="nav-label">Orders</span></a></li>
            <li><a href="/customers"><span class="nav-label"> Customers</span></a></li>
            <li><a href="/workteam"> <span class="nav-label">Work Team</span></a></li>
            <li><a href="/invoices"> <span class="nav-label"> Invoices</span></a></li>
            <li><a href="/settings"> <span class="nav-label"> Settings</span></a></li>

        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">

    <div class="normalheader transition animated fadeIn small-header">
        @yield('head_panel')
    </div>

<div class="content animate-panel">

    @yield('contend_panel')

</div>

    <!-- Footer-->
{{--     <footer class="footer">
        <span class="pull-right">
            All rights reserved
        </span>
        Tradokey - 2016
    </footer> --}}

</div>

<!-- Vendor scripts -->
{!!HTML::script('vendor/jquery/dist/jquery.min.js') !!}
{!!HTML::script('vendor/jquery-ui/jquery-ui.min.js')!!}
{!!HTML::script('vendor/slimScroll/jquery.slimscroll.min.js')!!}
{!!HTML::script('vendor/bootstrap/dist/js/bootstrap.min.js')!!}
{!!HTML::script('vendor/metisMenu/dist/metisMenu.min.js')!!}
{!!HTML::script('vendor/peity/jquery.peity.min.js')!!}
{!!HTML::script('vendor/iCheck/icheck.min.js')!!}
{!!HTML::script('vendor/sparkline/index.js')!!}

<!-- App scripts -->
{!!HTML::script('scripts/homer.js')!!}
{!!HTML::script('scripts/charts.js')!!}
<script> $('[data-toggle="tooltip"]').tooltip();</script>



@yield('add_script')

</body>
</html>
