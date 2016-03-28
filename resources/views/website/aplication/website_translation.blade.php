

<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>Tradokey</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>


    {!! HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('assets/plugins/font-awesome/css/font-awesome.css') !!}
    {!! HTML::style('assets/plugins/flexslider/flexslider.css') !!}
    {!! HTML::style('assets/css/styles.css') !!}
    {!! HTML::style('styles/tradokey.css') !!}


    {{--  --}}


    {!! HTML::style('vendor/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css') !!}
    {!! HTML::style('vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') !!}
    {!! HTML::style('vendor/select2-3.5.2/select2.css') !!}
    {!! HTML::style('country-select-js-master\build\css\countrySelect.min.css') !!}
    {!! HTML::style('vendor/select2-3.5.2/select2.css') !!}
    {!! HTML::style('vendor/select2-bootstrap/select2-bootstrap.css') !!}

    {!! HTML::style('vendor/sweetalert/lib/sweet-alert.css') !!}
    {!! HTML::style('vendor/fontawesome/css/font-awesome.css') !!}
    {!! HTML::style('vendor/metisMenu/dist/metisMenu.css') !!}
    {!! HTML::style('vendor/animate.css/animate.css') !!}
    {!! HTML::style('fontello/css/fontello.css') !!}
            <!-- App styles -->
    {!! HTML::style('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') !!}
    {!! HTML::style('fonts/pe-icon-7-stroke/css/helper.css') !!}


            <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href=""></noscript>
    <noscript><link rel="stylesheet" href=""></noscript>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Generic page styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- blueimp Gallery styles -->
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="css/jquery.fileupload.css">
    <link rel="stylesheet" href="css/jquery.fileupload-ui.css">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
    <noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
</head>

<body class="contact-page">
<div class="wrapper">

    @include('layouts.header')

    <div class="headline-bg-2 app-headline-bg">
    </div>

    <section class="contact-section section section-on-bg">
        <div class="container">
            <h1 class="text-center camr-tilte">Quote Website Translation</h1>
            <p></p>
            <div id="form-messages"></div>

            <div class="col-md-12">
                <div class="container">
                    <br>

                    <div class="row">
                        <div style="background:#ffffff; border-radius:9px;"
                             class="col-md-12 col-sm-12 col-xs-12  col-sm-offset-0 xs-offset-0">


                            <section class="col-md-7 go_aplication">

                                <div class="form-group col-lg-12">
                                    <label>Type of Service</label>
                                    <select class="js-source-states-2 form-group" name="type" style="width: 100%">
                                        {{-- <option>Text translation and proofreading</option>
                                        <option>Transcription and translation of text</option> --}}
                                        <option>Text translation and images</option>
                                    </select>
                                </div>
                                <div class="form-group  col-lg-5">
                                    <label>Initial Language</label>
                                    <select class="js-source-states-2 form-group" name="initial" required="required"
                                            style="width: 100%">
                                        @foreach ($LA as $la)
                                            <option value="{!! $la->title !!}">{!! $la->title !!}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <!--  -->
                                <div class="form-group  col-lg-7">
                                    <label>Target language(s)</label>
                                    <select class="js-source-states-2 form-group" multiple="multiple" name="initial"
                                            required="required" style="width: 100%">
                                        @foreach ($LA as $la)
                                            <option value="{!! $la->title !!}">{!! $la->title !!}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <!--  -->
                                <div class="form-group  col-lg-5">
                                    <label><i class="icon-person"></i> Add expert</label>
                                    <select class="js-source-states-2 form-group" name="initial" required="required"
                                            style="width: 100%">
                                        @foreach ($experts as $expert)
                                            <option value="{!! $expert->title !!}">{!! $expert->title !!}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group  col-lg-7">
                                    <label><i class="icon-docs-1"></i> Number of Pages</label>
                                    <select class="js-source-states-2 form-group" name="initial" required="required"
                                            style="width: 100%">
                                        <option>Between 1 and 5</option>
                                        <option>Between 5 and 12</option>
                                        <option>Between 12 and 30</option>
                                        <option>More than 30 pages</option>

                                    </select>
                                    <br><br>
                                </div>

                                <div class="form-group col-lg-12">
                                    <label><i class="icon-link-5"></i> URL Project</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">http://</div>
                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="">

                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label><i class=" icon-attach-2"></i> Comments</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>


                            </section>

                            <section class="col-md-5 go_aplication">

                                <br>


                                <div class="rate-aplication col-md-12">
                                    <span class="col-md-9 col-sm-9 col-xs-9">
                                      <h5><i class="icon-heart-empty"></i> Text translation and images</h5>
                                  </span>
                                  <span class="col-md-3 text-right">
                                     0<i class="icon-dollar-1"></i>
                                 </span>
                                </div>


                                <div class="rate-aplication col-md-12">
                              <span class="col-md-9 col-sm-9 col-xs-9">
                                <h5><i class="icon-person"></i> Expert Medic</h5>
                            </span>
                            <span class="col-md-3 text-right">
                               0.010<i class="icon-dollar-1"></i>
                           </span>
                                </div>

                                <div class="rate-aplication col-md-12">
                        <span class="col-md-9 col-sm-9 col-xs-9">
                          <h5><i class="icon-docs-1"></i> Between 12 and 30</h5>
                      </span>
                      <span class="col-md-3 text-right">
                         0<i class="icon-dollar-1"></i>
                     </span>
                                </div>




                                <div class="rate-aplication col-md-12">
                    <span class="col-md-9 col-sm-9 col-xs-9">
                      <h5>  <img src="images/small/United States.png" width="20" alt="">   American English <i class="icon-right-1"></i> <img src="images/small/Armenia.png" width="20" alt=""> Armenian</h5>
                  </span>
                  <span class="col-md-3 text-right">
                     0.070<i class="icon-dollar-1"></i>
                 </span>
                                </div>

                                <div class="rate-aplication col-md-12">
                <span class="col-md-9 col-sm-9 col-xs-9">
                  <h5><i class="icon-network-1"></i> Website</h5>
                  <div class="col-md-12" id="list_documents">

                  </div>
              </span>


                                    <br>
                                    <button class="btn btn-block btn-primary">Check Quote</button>


                        </div>


                    <br>




            </div>


        </div><!--//container-->

    </section><!--//contact-section-->

</div><!--//wrapper-->

@include('layouts.footer')

        <!-- Javascript -->

<script type="text/javascript" src="vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>

<!-- contact page specific js starts -->
<script type="text/javascript" src="assets/plugins/jquery.validate.min.js"></script>
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

        <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>

<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="vendor/file_upload/js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->


<script>
    $("#charUp").counter({
        count: 'up',
        msg: '(max 600 characters)',
        goal: 600
    });

    $('.confirm1').click(function () {
        swal({
            title: "Very good!",
            text: "Thank you very much, now receive a verification email.",
            type: "success"
        });
    });


</script>

<script>


    //CKEDITOR.replace( 'editor1',{language: 'en',uiColor: '#f1f1f1'} );

    $("[data-provide='datepicker']").datepicker({
        format: 'mm-dd-yyyy'

    });
    $(".js-source-states-2").select2();
</script>

{{--  --}}
<script>
    $('html').on('change', function() {
        setTimeout(VerifyingDocuments,2000);
    })
    $('html').on('click','.btn', function() {
        setTimeout(VerifyingDocuments,2000);
    });
    function VerifyingDocuments(){
        items = $(".file_upload").size();
        text = $(".file_upload").prop('href');

    }
</script>

</body>
</html>

