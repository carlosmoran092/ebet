
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
        <!-- ******HEADER****** --> 
        <header id="header" class="header navbar-fixed-top">  
            <div class="container">       
                <h1 class="logo">
                    <a href="index.html"><span class="logo-icon"></span><span class="text">TRADOKEY</span></a>
                </h1><!--//logo-->
                <nav class="main-nav navbar-right" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!--//nav-toggle-->
                    </div><!--//navbar-header-->
                    <div id="navbar-collapse" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a href="index.html">Home</a></li>
                            <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Services <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="download.html">Download Apps</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                    <li><a href="blog-category.html">Blog Category</a></li>
                                    <li><a href="blog-archive.html">Blog Archive</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact</a></li>                 
                                </ul>                            
                            </li><!--//dropdown-->    
                            <li class="nav-item">
                                 <?php echo HTML::link('join', 'Join Us');; ?>

                            </li>
                            <li class="nav-item"><a href="pricing.html">Pricing</a></li>

                            <li class="nav-item">
                                <?php echo HTML::link('login', 'Log in');; ?>

                            </li>
                            <li class="nav-item nav-item-cta last"><a class="btn btn-cta btn-cta-secondary" href="signup.html">Sign Up Free</a></li>
                        </ul><!--//nav-->
                    </div><!--//navabr-collapse-->
                </nav><!--//main-nav-->                     
            </div><!--//container-->
        </header><!--//header-->

        <div class="headline-bg contact-headline-bg">
        </div><!--//headline-bg-->


        <!-- ******Contact Section****** --> 
        <section class="contact-section section section-on-bg">
            <div class="container">
                <h2 class="title text-center">Contact Us</h2>
                <p class="intro text-center">We’d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <form id="contact-form" class="contact-form" method="post" action="">                    
                    <div class="row text-center">
                        <div class="contact-form-inner col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">
                            <div class="row">                                                           

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
                                    <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="12" required></textarea>
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

    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">                    
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-col-inner">
                            <h2 class="title">About us</h2>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-caret-right"></i>Who we are</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Press</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Blog</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Jobs</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->    
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-col-inner">
                            <h3 class="title">Product</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-caret-right"></i>How it works</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>API</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Download Apps</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Pricing</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->              
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12 sm-break">
                        <div class="footer-col-inner">
                            <h3 class="title">Support</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-caret-right"></i>Help</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Documentation</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Terms of services</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Privacy</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->            
                    </div><!--//foooter-col-->   
                    <div class="footer-col connect col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-col-inner">
                            <ul class="social list-inline">
                                <li><a href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>        
                                <li class="row-end"><a href="#"><i class="fa fa-rss"></i></a></li>             
                            </ul>
                            <div class="form-container">
                                <p class="intro">Stay up to date with the latest news and offers from Velocity</p>
                                <form class="signup-form navbar-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                    </div>   
                                    <button type="submit" class="btn btn-cta btn-cta-primary">Subscribe Now</button>                                 
                                </form>                               
                            </div><!--//subscription-form-->
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                    <div class="clearfix"></div> 
                </div><!--//row-->

            </div><!--//footer-content-->
            <div class="bottom-bar">
                <div class="container">
                    <small class="copyright">TRADOKEY™ All rights reserved</small>                
                </div><!--//container-->
            </div><!--//bottom-bar-->
        </footer><!--//footer-->


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

