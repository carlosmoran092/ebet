<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  


<head>
	<title>Responsive website template for products</title>

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
  <link id="theme-style" rel="stylesheet" href="styles/tradokey.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script>
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

      	ga('create', 'UA-24707561-18', 'auto');
      	ga('send', 'pageview');

      </script>

    </head> 

    <body class="home-page">   
      <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <div class="bg-slider-wrapper">
        <div class="flexslider bg-slider">
         <ul class="slides">          
          <li class="slide slide-2"></li>
          <li class="slide slide-1"></li>
          <li class="slide slide-3"></li>
        </ul>
      </div>
    </div><!--//bg-slider-wrapper-->        

    <section class="promo section section-on-bg">
      <div class="container text-center">                
       <h2 class="title">We are professionals ready to provide great <br>service and support in multiple languages</h2>
       <p class="intro">Tradekey is a web tool designed to provide confidence and ensure quality translations.</p>
       <p><a class="btn btn-cta btn-cta-tertiary" href="">Quote translation</a></p>   
       <button type="button" class="play-trigger btn-link " data-toggle="modal" data-target="#modal-video" ><i class="fa fa-youtube-play"></i> 
        Who are we?</button>
      </div><!--//container-->
    </section><!--//promo-->

    <div class="sections-wrapper">   

      <!-- ******Why Section****** -->
      <section id="why" class="section why">
       <div class="container">
        <h2 class="title text-center">Why choose Tradokey?</h2>
        <p class="intro text-center">We are an essential solution for users very concerned about the quality of translations of documents.</p>
        <div class="row item">
         <div class="content col-md-5 col-sm-12 col-xs-12">
          <h3 class="title">Our value and rationale</h3>
          <div class="desc">
           <p>Our main interest in supporting our customers in every part of the process, providing confidence and a pleasant accompaniment. Tradokey has a professional team with extensive experience and support for multiple languages, we are currently growing and soon we will have more support.</p>
         </div>
         <div class="quote">
           <div class="quote-profile">
            <img class="img-responsive img-circle" src="images/profile.jpg" alt="" />
          </div><!--//profile-->
          <div class="quote-content">
            <blockquote><p><a href="https://twitter.com/Tradokey" target="_blank">@tradokey</a> We have a fantastic team, we are really committed to our users, we all always open to meet all requests efficiently channels. I encourage you to check.</p></blockquote>
            <p class="source">@WalterGerman, CEO</p>
          </div><!--//quote-content-->                                     
        </div><!--//quote-->                        
      </div><!--//content-->
      <figure class="figure col-md-6 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
        <img class="img-responsive" src="images/11.png" />
      </figure>
    </div><!--//item-->



    <div class="row item last-item">
     <div class="content col-md-4 col-sm-12 col-xs-12 col-md-push-8 col-sm-push-0 col-xs-push-0">
      <h3 class="title">Connect your users</h3>
      <div class="desc">
       <p>Proin euismod consectetur sodales. Maecenas eu arcu nibh. Mauris eget ligula nisi. Donec imperdiet lacus non velit sagittis, vitae feugiat orci pellentesque. Suspendisse dictum metus non elit malesuada mollis. Donec cursus ultrices nibh, et semper nisl. Nullam dignissim tincidunt tellus, sit amet pretium ante pulvinar et. Donec lobortis elementum ultricies. Pellentesque dignissim odio quis commodo tristique. Quisque egestas felis nec orci tincidunt interdum.</p>
      

     </div>

     <div class="quote">
       <div class="quote-profile">
        <img class="img-responsive img-circle" src="assets/images/people/profile-s-4.png" alt="" />
      </div><!--//profile-->
      <div class="quote-content">
        <blockquote><p>I can connect to like-minded people lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></blockquote>
        <p class="source">@JackT, San Francisco</p>
      </div><!--//quote-content-->
    </div><!--//quote-->
  </div><!--//content-->
  <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-pull-4 col-sm-pull-0 col-xs-pull-0">
    <img class="img-responsive" src="assets/images/figures/figure-4.png" alt="" />
  </figure>
</div><!--//item-->


<div class="feature-lead text-center">
 <h4 class="title">Want to discover all the features?</h4>
 <p><a class="btn btn-cta btn-cta-secondary" href="our-company">Our Company</a></p>
</div>
</div><!--//container-->
</section><!--//why-->  




<!-- ******CTA Section****** -->
<section id="cta-section" class="section cta-section text-center home-cta-section">
 <div class="container">
  <h2 class="title">Are you interested in being part of the team of Tradokey?<br>
    <small class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit</small></h2>

    <p><a class="btn btn-cta btn-cta-primary" href="/join" target="_blank">Join today Tradokey</a>

    </p>
  </div><!--//container-->
</section><!--//cta-section-->

</div><!--//section-wrapper-->





<!-- Video Modal -->
<div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
      </div>
      <div class="modal-body">
        <div class="video-container">
          <iframe id="vimeo-video" src="http://player.vimeo.com/video/68180288?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div><!--//video-container-->
      </div><!--//modal-body-->
    </div><!--//modal-content-->
  </div><!--//modal-dialog-->
</div><!--//modal-->



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
<script type="text/javascript" src="assets/js/main.js"></script>



</body>

<!-- Mirrored from themes.3rdwavemedia.com/velocity/1.5.5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 07:12:27 GMT -->
</html> 

