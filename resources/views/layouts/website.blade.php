<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Tradokya</title>


    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    {!! HTML::style('vendor/fontawesome/css/font-awesome.css') !!}
    {!! HTML::style('vendor/metisMenu/dist/metisMenu.css') !!}
    {!! HTML::style('vendor/animate.css/animate.css') !!}

    {!! HTML::style('vendor/bootstrap/dist/css/bootstrap.css') !!}
    {!! HTML::style('fontello/css/fontello.css') !!}


            <!-- App styles -->
    {!! HTML::style('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') !!}
    {!! HTML::style('fonts/pe-icon-7-stroke/css/helper.css') !!}
    {!! HTML::style('styles/style.css') !!}
    {!! HTML::style('styles/mainweb.css') !!}
    @yield('add_style')
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>


</head>
<body>


<div class="splash"> <div class="splash-title"><h1><a href="./">TRADOKEY</a></h1>
        {!! HTML::image('images/loading-bars.svg', 'loading', ['width'=>'64','height'=>'64']) !!}
    </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->

<div id="header">

    <div id="logo" class="light-version">
        <span class="trw-logo">
            <a href="./">TRADOKEY</a>
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu hidden-lg hidden-md"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">TRADOKEY</span>
        </div>

        <div class="navbar-left col-md-offset-2 hidden-sm hidden-xs trw-menu">
            <ul class="trw-ul">
                <li><a href="./"><i class="icon-home-5"></i> Home</a></li>
                <li><a href="#" class="opt-service" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class=" icon-network-1"></i>  Services</a>
                </li>
                <li><a href="/join"><i class=" icon-adult"></i> Join us</a></li>
                <li><a href="#"><i class="icon-phone"></i>  Contacts</a></li>
            </ul>
        </div>

{{--         <div class="navbar-right">
    
        </div> --}}

    </nav>
</div>

<!-- Navigation -->

<aside id="menu" class="hidden-md hidden-lg">
    <div id="navigation">
            <div class="stats-label text-color">
                <div class="dropdown">
                </div>
            </div>

        <ul class="nav" id="side-menu">
            <li><a href="/quotations"> <span class="nav-label">Home</span></a></li>
            <li><a href="/orders"> <span class="nav-label">Services</span></a></li>
            <li><a href="/workteam"> <span class="nav-label">Join Us</span></a></li>
            <li><a href="/invoices"> <span class="nav-label">Contacts</span></a></li>

        </ul>
    </div>
</aside>


  @yield('contend_site')  


<footer>
    <div class="container">
        <div class="col-md-12 text-center">
            <span class="text-footer"><br><br><b>TRADOKEY<span class="trw-tm">™</span> <small>All rights reserved</small></b></span>
            
        </div>
        
    </div>   

</footer>

<!-- Main Wrapper -->

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

@yield('add_script')


</body>

</html>