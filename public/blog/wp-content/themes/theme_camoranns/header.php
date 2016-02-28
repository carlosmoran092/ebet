<?php
/**
 * camoranns2 template for displaying the header
 *
 * @package WordPress
 * @subpackage camoranns2
 * @since camoranns2 1.0
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie ie-no-support" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>         <html class="ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( ); ?></title>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/theme_camoranns.css">

		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
			<![endif]-->
			<?php wp_head(); ?>
		</head>
		<body class="features-page">
			

				<header id="header" class="header navbar-fixed-top">  
					<div class="container">       
						<!-- <h1 class="logo">
							<a href="index.html"><span class="logo-icon"></span><span class="text">Velocity</span></a>
						</h1> --><!--//logo-->
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
									<li class="active nav-item"><a href="features.html">Features</a></li>
									<li class="nav-item"><a href="pricing.html">Pricing</a></li>
									<li class="nav-item dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Pages <i class="fa fa-angle-down"></i></a>
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
									<li class="nav-item"><a href="login.html">Log in</a></li>
									<li class="nav-item nav-item-cta last"><a class="btn btn-cta btn-cta-secondary" href="signup.html">Sign Up Free</a></li>
								</ul><!--//nav-->
							</div><!--//navabr-collapse-->
						</nav><!--//main-nav-->                     
					</div><!--//container-->
				</header><!--//header-->




<!-- 			<header class="site-header">



				<a class="logo" href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
					<h2 class="blog-name"><?php bloginfo( 'name' ); ?></h2>
					<div class="blog-description"><?php bloginfo( 'description' ); ?></div>
				</a>



			</header>		 -->		