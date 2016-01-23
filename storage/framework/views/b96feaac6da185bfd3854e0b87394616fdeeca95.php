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
    <?php echo HTML::style('vendor/fontawesome/css/font-awesome.css'); ?>

    <?php echo HTML::style('vendor/metisMenu/dist/metisMenu.css'); ?>

    <?php echo HTML::style('vendor/animate.css/animate.css'); ?>


    <?php echo HTML::style('vendor/bootstrap/dist/css/bootstrap.css'); ?>

    <?php echo HTML::style('fontello/css/fontello.css'); ?>



            <!-- App styles -->
    <?php echo HTML::style('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css'); ?>

    <?php echo HTML::style('fonts/pe-icon-7-stroke/css/helper.css'); ?>

    <?php echo HTML::style('styles/style.css'); ?>

    <?php echo HTML::style('styles/mainweb.css'); ?>

    <?php echo $__env->yieldContent('add_style'); ?>
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>


</head>
<body>


<div class="splash"> <div class="splash-title"><h1><a href="./">TRADOKEY</a></h1>
        <?php echo HTML::image('images/loading-bars.svg', 'loading', ['width'=>'64','height'=>'64']); ?>

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

<?php /*         <div class="navbar-right">
    
        </div> */ ?>

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


  <?php echo $__env->yieldContent('contend_site'); ?>  


<footer>
    <div class="container">
        <div class="col-md-12 text-center">
            <span class="text-footer"><br><br><b>TRADOKEY<span class="trw-tm">™</span> <small>All rights reserved</small></b></span>
            
        </div>
        
    </div>   

</footer>

<!-- Main Wrapper -->

<!-- Vendor scripts -->
<?php echo HTML::script('vendor/jquery/dist/jquery.min.js'); ?>

<?php echo HTML::script('vendor/jquery-ui/jquery-ui.min.js'); ?>

<?php echo HTML::script('vendor/slimScroll/jquery.slimscroll.min.js'); ?>

<?php echo HTML::script('vendor/bootstrap/dist/js/bootstrap.min.js'); ?>

<?php echo HTML::script('vendor/metisMenu/dist/metisMenu.min.js'); ?>

<?php echo HTML::script('vendor/peity/jquery.peity.min.js'); ?>

<?php echo HTML::script('vendor/iCheck/icheck.min.js'); ?>

<?php echo HTML::script('vendor/sparkline/index.js'); ?>



        <!-- App scripts -->
<?php echo HTML::script('scripts/homer.js'); ?>

<?php echo HTML::script('scripts/charts.js'); ?>


<?php echo $__env->yieldContent('add_script'); ?>


</body>

</html>