
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

        @include('layouts.header')

        <div class="headline-bg-2 app-headline-bg">
        </div><!--//headline-bg-->


        <!-- ******Contact Section****** --> 
        <section class="contact-section section section-on-bg">
          <div class="container">
            <h1 class="text-center camr-tilte">Quote translation service</h1>

            <div class="row" >
              <div style="background:#ffffff; border-radius:9px;" class="col-md-12 col-sm-12 col-xs-12  col-sm-offset-0 xs-offset-0">


                <section class="col-md-7 go_aplication">

                  <div class="form-group col-lg-12">
                    <label>Type of Service</label>
                    <select class="js-source-states-2 form-group" name="type" style="width: 100%">
                      <option>Text translation and proofreading</option>
                      <option>Transcription and translation of text</option>                              
                    </select>
                  </div>
                  <div class="form-group  col-lg-5">
                    <label>Initial Language</label>
                    <select class="js-source-states-2 form-group"  name="initial" required="required" style="width: 100%">
                      @foreach ($LA as $la)
                      <option value="{!! $la->title !!}">{!! $la->title !!}</option>
                      @endforeach

                    </select>
                  </div>
                  <!--  -->
                  <div class="form-group  col-lg-7">
                    <label>Target language(s)</label>
                    <select class="js-source-states-2 form-group" multiple="multiple"  name="initial" required="required" style="width: 100%">
                      @foreach ($LA as $la)
                      <option value="{!! $la->title !!}">{!! $la->title !!}</option>
                      @endforeach

                    </select>
                  </div>
                  <!--  -->
                  <div class="form-group  col-lg-5">
                    <label>Add expert</label>
                    <select class="js-source-states-2 form-group"  name="initial" required="required" style="width: 100%">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>

                    </select>
                  </div>

                  <div class="form-group  col-lg-7">
                    <label>Delivery Type</label>
                    <select class="js-source-states-2 form-group"  name="initial" required="required" style="width: 100%">
                      <option>Keep original style and format</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>

                    </select>
                  </div>

                  <hr>

                  

                  

                  <div class="form-group col-lg-12"> 

                   <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary">Add File</button>                   
                    <button type="button" class="btn btn-primary">Add Text</button><br>
                  </div>

                  <ul class="list-group list-aplication">
                    <li class="list-group-item"><button class="btn btn-xs"><i class="icon-cancel-3"></i></button> <span>The Name of File.doc</span>
                     <input type="number" class="col-xs-2 pull-right input-doc"  name="" value="861" placeholder=""></li>
                     <li class="list-group-item"><button class="btn btn-xs"><i class="icon-cancel-3"></i></button> The Name of File.doc
                      <input type="number" class="col-xs-2 pull-right input-doc"  name="" value="378" placeholder=""></li>
                      <li class="list-group-item"><button class="btn btn-xs"><i class="icon-cancel-3"></i></button> The Name of File.docx

                        <input type="number" class="col-xs-2 pull-right input-doc"  name="" value="689" placeholder="">
                      </li>
                    </ul>
                  </div>
                </section>



                <section class="col-md-5 go_aplication">


                  <br>


                  <div class="rate-aplication col-md-12">
                    <span class="col-md-9 col-sm-9 col-xs-9">
                      <h5>  <img src="images/small/United States.png" width="20" alt="">   Text translation and proofreading</h5>
                    </span>  
                    <span class="col-md-3 text-right">
                       0
                    </span>
                  </div>


                  <div class="rate-aplication col-md-12">
                    <span class="col-md-9 col-sm-9 col-xs-9">
                      <h5>  <img src="images/small/United States.png" width="20" alt="">   Expert Medic</h5>
                    </span>  
                    <span class="col-md-3 text-right">
                       0.010
                    </span>
                  </div>

                  <div class="rate-aplication col-md-12">
                    <span class="col-md-9 col-sm-9 col-xs-9">
                      <h5>  <img src="images/small/United States.png" width="20" alt="">   Keep original style and format</h5>
                    </span>  
                    <span class="col-md-3 text-right">
                       0
                    </span>
                  </div>


                  <div class="rate-aplication col-md-12">
                    <span class="col-md-9 col-sm-9 col-xs-9">
                      <h5>  <img src="images/small/United States.png" width="20" alt="">   American English <i class="icon-right-1"></i> <img src="images/small/Armenia.png" width="20" alt=""> Armenian</h5>
                    </span>  
                    <span class="col-md-3 text-right">
                       0.070
                    </span>
                  </div>

                  <div class="rate-aplication col-md-12">
                    <span class="col-md-9 col-sm-9 col-xs-9">
                      <h5>  <img src="images/small/United States.png" width="20" alt="">   American English <i class="icon-right-1"></i> <img src="images/small/Albania.png" width="20" alt=""> Albanian</h5>
                    </span>  
                    <span class="col-md-3 text-right">
                       0.070
                    </span>
                  </div>

                  <div class="rate-aplication col-md-12">
                    <span class="col-md-9 col-sm-9 col-xs-9">
                      <h5>  <img src="images/small/United States.png" width="20" alt="">   Total Words <i class="icon-right-1"></i></h5>
                    </span>  
                    <span class="col-md-3 text-right">
                       1935
                    </span>
                  </div>




                </section>




              </div>
            </div><!--//row-->
            <div id="form-messages"></div>
          </form><!--//contact-form-->
        </div><!--//container-->
      </section><!--//contact-section-->

    </div><!--//wrapper-->


    @include('layouts.footer')


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

