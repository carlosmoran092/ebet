
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

{{--  --}}

    <link rel="stylesheet" href="vendor/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" />
    <link rel="stylesheet" href="vendor/select2-3.5.2/select2.css" />
    <link rel="stylesheet" href="country-select-js-master\build\css\countrySelect.min.css">
    <link rel="stylesheet" href="vendor/select2-3.5.2/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap/select2-bootstrap.css" />
    {!! HTML::style('vendor/sweetalert/lib/sweet-alert.css') !!}


{{--  --}}

    {!! HTML::style('vendor/fontawesome/css/font-awesome.css') !!}
    {!! HTML::style('vendor/metisMenu/dist/metisMenu.css') !!}
    {!! HTML::style('vendor/animate.css/animate.css') !!}   
    {!! HTML::style('fontello/css/fontello.css') !!}


    <!-- App styles -->
    {!! HTML::style('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') !!}
    {!! HTML::style('fonts/pe-icon-7-stroke/css/helper.css') !!}

    
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
                               {!!HTML::link('join', 'Join Us');!!}
                           </li>
                           <li class="nav-item"><a href="pricing.html">Pricing</a></li>

                           <li class="nav-item">
                            {!!HTML::link('login', 'Log in');!!}
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
            <h2 class="title text-center">Join Us</h2>
            <p class="intro text-center">We’d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <form id="contact-form" class="contact-form" method="post" action="">                    
                <div class="row">
                    <div class="contact-form-inner col-md-8 col-sm-12 col-xs-12  col-sm-offset-0 xs-offset-0">
                        <div class="row">                                                           

                            <div class="form-group"><br>

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="icon-heart-empty-1"></i> Personal Data</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class=" icon-town-hall"></i> Professional Information</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-check-circle"></i> Confirmation</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <!--     --><br>

                                        <div class="col-lg-12">
                                            <div class="row">
                                               {!! Form::open(array('action' => 'WebsiteController@store','before' => 'csrf','method' => 'post','id'=>'form-join')) !!}

                                               <div class="form-group col-lg-6">
                                                <label>Name</label>
                                                <input type="text" value="" id="" class="form-control" name="name" >
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Last Name</label>
                                                <input type="text" value="" id="" class="form-control" name="last_name">
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <!--  -->
                                                <label>Gender</label>
                                                <div class="form-group">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="male" name="gender" checked="">
                                                        <label for="inlineRadio1" class="text-p-orders"> Male </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="female" name="gender">
                                                        <label for="inlineRadio2" class="text-p-orders"> Female </label>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--  -->
                                            <!--  -->
                                            <div class="form-group col-lg-offset-1 col-lg-4">
                                                <div class="form-group">
                                                    <label>Birthday</label>
                                                    <input data-provide="datepicker" name="birthday" class="form-control" required="true">
                                                </div>
                                            </div>
                                            <!--  -->
                                            <div class="form-group col-lg-6">
                                                <label>Email Address</label>
                                                <input type="" value="" id="" class="form-control" name="email" placeholder="user@email.com">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Password</label>
                                                <input type="password" value="" id="" class="form-control" name="password" placeholder="******">
                                            </div>


                                            <div class="form-group col-lg-6">
                                                <label>Phone</label>
                                                <input type="" value="" id="" class="form-control" name="phone">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Skype User</label>
                                                <input type="text" value="" id="" class="form-control" name="skype" >
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Web Site or Public Linkedin</label>
                                                <input type="text" value="" id="" class="form-control" name="website" placeholder="http://">
                                            </div>

                                            <div class="form-group col-lg-6 col-sm-6" >
                                                <label>Home Country</label>

                                                <div class="form-group">
                                                    <input id="country_selector" class="form-control input-sm col-sm-12" type="text" style="min-width: 332px;min-height: 35px;">
                                                    <label for="country_selector" style="display:none; z-index:5000;">Select a country here...</label>
                                                </div>
                                                <div class="form-item" style="display:none;">
                                                    <input class="form-group" type="text" id="country_selector_code" name="home_country" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" style="width:100%; z-index:5000" />
                                                    <label for="country_selector_code">...and the selected country code will be updated here</label>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <br>
                                    <div class="form-group  col-lg-12">
                                        <label>Languages</label>
                                        <select class="js-source-states-2 form-group" multiple="multiple" name="known_languages[]" style="width: 100%">
                                            @foreach ($LA as $la)
                                            <option value="{!! $la->title !!}">{!! $la->title !!}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group  col-lg-12">
                                        <label>Preferences</label>
                                        <select class="js-source-states-2 form-group" multiple="multiple" 
                                        name="preferences[]" style="width: 100%" >
                                        <option value="General">General</option>
                                        <option value="Literature">Literature</option>
                                        <option value="Medic">Medic</option>
                                        <option value="Academic">Academic</option>
                                        <option value="Diplomatic">Diplomatic</option>
                                        <option value="Technological">Technological</option>
                                        <option value="Politic">Politic</option>                                
                                    </select>
                                </div>

                                <div class="form-group col-lg-12">
                                    <label>Professional profile</label>
                                    <textarea id="charUp" rows="6" class="form-control" name="professional_profile"></textarea>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages"><br>

                                <div class="col-lg-12">
                                    <div class="hpanel">
                                        <div class="panel-body text-center h-200">
                                            <i class="pe-7s-check fa-4x"></i><br>

                                            <h5 class="m-xs"><a  data-toggle="modal" data-target="#terms">See terms and conditions</a></h5><br>

                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox1" type="checkbox" required="required">
                                                <label for="checkbox1">
                                                 <b>I agree</b>
                                             </label>
                                         </div>
                                         <hr>


                                         <!-- Modal -->
                                         <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Terms and conditions</h4>
                                            </div>
                                            <div class="modal-body">
                                              <p class="form-terms">
                                                Vestibulum porttitor quam eu ligula venenatis pellentesque. Nulla facilisi. Aliquam feugiat orci et odio lobortis, vel fringilla quam laoreet. Proin congue dolor sed justo vehicula, in mollis erat porta. Ut eget lorem aliquam, dignissim tortor sed, sollicitudin leo. Integer sem eros, luctus non erat eu, convallis ultrices ipsum. Donec ut porttitor ex. Aliquam non felis at felis varius rutrum. Sed accumsan enim et viverra pulvinar. Pellentesque magna risus, posuere et auctor consectetur, accumsan eget augue. Aliquam id interdum nulla. Praesent congue nulla sit amet libero rhoncus, non tincidunt lectus tempor. Vestibulum eu eros lacus. Praesent lacinia mauris finibu.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            {!! Form::submit('Submit!', array('class' => 'btn btn-default btn-md ')); !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

{{--  --}}


    <script src="vendor/iCheck/icheck.min.js"></script>
    <script src="vendor/sparkline/index.js"></script>
    <script src="vendor/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
    <script src="vendor/select2-3.5.2/select2.min.js"></script>
    <script src="country-select-js-master/build/js/countrySelect.min.js"></script>
    {!! HTML::script('vendor/jquery-word/jquery-word.min.js') !!}
    {!! HTML::script ('vendor/sweetalert/lib/sweet-alert.min.js') !!}


    <script>
        $("#charUp").counter({
            count: 'up',
            msg:'(max 600 characters)',
            goal: 600
        });

        $('.confirm1').click(function(){
            swal({
                title: "Very good!",
                text: "Thank you very much, now receive a verification email.",
                type: "success"
            });
        });


    </script>

    <script>
        $("#country_selector").countrySelect({
            //defaultCountry: "jp",
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            preferredCountries: ['kr', 'gb', 'us']
        });

        $("#country_selector_2").countrySelect({
            //defaultCountry: "jp",
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            preferredCountries: ['us']
        });


        //CKEDITOR.replace( 'editor1',{language: 'en',uiColor: '#f1f1f1'} );

        $("[data-provide='datepicker']").datepicker({
            format: 'mm-dd-yyyy'

        });
        $(".js-source-states-2").select2();
    </script>

{{--  --}}





</body>
</html> 

