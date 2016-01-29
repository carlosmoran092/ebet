
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Tradokey</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="styles/tradokey.css">



    <?php echo HTML::style('vendor/fontawesome/css/font-awesome.css'); ?>

    <?php echo HTML::style('vendor/metisMenu/dist/metisMenu.css'); ?>

    <?php echo HTML::style('vendor/animate.css/animate.css'); ?>



    <?php echo HTML::style('fontello/css/fontello.css'); ?>



    <!-- App styles -->
    <?php echo HTML::style('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css'); ?>

    <?php echo HTML::style('fonts/pe-icon-7-stroke/css/helper.css'); ?>


    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head> 

  <body class="contact-page">
    <div class="wrapper">
     <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

     <div class="headline-bg contact-headline-bg">
     </div><!--//headline-bg-->


     <!-- ******Contact Section****** --> 
     <section class="contact-section section section-on-bg">
        <div class="container">
            <h1 class="text-center camr-tilte">Contact Us</h1>
            <p class="intro text-center">In Tradekey we are always ready to answer your queries, we show below several ways to send us your questions.</p>
            <form id="contact-form" class="contact-form" method="post" action="">                    
                <div class="row text-center">

                 <div class="col-md-4 col-sm-12 col-xs-12 text-left">
                     <div class="list-group">
                         <a class="list-group-item active">
                             <h4 class="list-group-item-heading">List group item heading</h4>
                             <p class="list-group-item-text">Content goes here</p>
                         </a>
                         
                         <li class="list-group-item"><i class="icon-skype"></i> tradokey</li>
                         <li class="list-group-item"><i class="icon-mobile-5"></i> 34 55743443</li>
                         <li class="list-group-item"><i class="icon-phone-2"></i> 87 4544342</li>
                         <li class="list-group-item"><i class="icon-mail-4"></i> contact@tradokey.com</li>
                         <li class="list-group-item"><i class="icon-mail-4"></i> support@tradokey.com</li>
                         
                     </div>
                     

                 </div> 
                 <div class="contact-form-inner col-md-8 col-sm-12 col-xs-12">
                    <div class="row"><br>                                                           

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            <label class="sr-only" for="cname">Your name</label>
                            <input type="text" class="form-control" id="cname" name="name" placeholder="Your name" minlength="2" required>
                        </div>                    
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            <label class="sr-only" for="cemail">Email address</label>
                            <input type="email" class="form-control" id="cemail" name="email" placeholder="Your email address" required>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <label class="sr-only" for="cmessage">Your message</label>
                            <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="4" required></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <button type="submit" class="btn btn-block btn-cta btn-cta-primary">Send Message</button>
                        </div>                           
                    </div><!--//row-->
                </div>



            </div><!--//row-->
            <div id="form-messages"></div>
        </form><!--//contact-form-->
    </div><!--//container-->
</section><!--//contact-section-->





</div><!--//wrapper-->

<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<!-- Javascript -->          
<script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script> 

<!-- contact page specific js starts -->
<script type="text/javascript" src="assets/plugins/jquery.validate.min.js"></script>       
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script type="text/javascript" src="assets/plugins/gmaps/gmaps.js"></script> 
<script type="text/javascript" src="assets/js/contact.js"></script>  

<!-- contact page specific js ends-->  

<script type="text/javascript" src="assets/js/main.js"></script>




</body>
</html> 

