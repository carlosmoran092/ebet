

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
            <h1 class="text-center camr-tilte">Quote Translation Service</h1>
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
                                        @foreach ($services as $service)
                                            <option value="{!! $service->title !!}">{!! $service->title !!}</option>
                                        @endforeach
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
                                    <label><i class="icon-docs-1"></i> Delivery Type</label>
                                    <select class="js-source-states-2 form-group" name="initial" required="required"
                                            style="width: 100%">
                                        <option>Keep original style and format</option>
                                        <option>Free presentation style editable format</option>

                                    </select>
                                    <br><br>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-12">
                                        <!-- The file upload form used as target for the file upload widget -->
                                        {!! Form::open(array('method' => 'post', 'url' => 'text_files', 'files' => true,'id' => 'fileupload')) !!}


                                        <div class="row fileupload-buttonbar">
                                            <div class="col-lg-12">
                                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span type="button" class="btn btn-success fileinput-button">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    <span>Add files</span>
                                    <input type="file" name="files[]" multiple>
                                </span>
                                                <button type="submit" class="btn btn-primary start">
                                                    <i class="glyphicon glyphicon-upload"></i>
                                                    <span>Start upload</span>
                                                </button>
                                                <!--   <button type="reset" class="btn btn-warning cancel">
                                                       <i class="glyphicon glyphicon-ban-circle"></i>
                                                       <span>Cancel upload</span>
                                                   </button>
                                                   <button type="button" class="btn btn-danger delete">
                                                       <i class="glyphicon glyphicon-trash"></i>
                                                       <span>Delete</span>
                                                   </button>
                                                   <input type="checkbox" class="toggle"> -->
                                                <!-- The global file processing state -->
                                                <span class="fileupload-process"></span>
                                            </div>
                                            <!-- The global progress state -->
                                            <div class="col-lg-5 fileupload-progress fade">
                                                <!-- The global progress bar -->
                                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                                </div>
                                                <!-- The extended global progress state -->
                                                <div class="progress-extended">&nbsp;</div>
                                            </div>
                                        </div>
                                        <!-- The table listing the files available for upload/download -->
                                        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                                        </form>


                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Important,</strong> Receive our policy of <a href="#">confidentiality and data protection</a>
                                        </div>


                                    </div>

                                    <hr>


                            </section>

                            <section class="col-md-5 go_aplication">

                                <br>


                                <div class="rate-aplication col-md-12">
                                    <span class="col-md-9 col-sm-9 col-xs-9">
                                      <h5><i class="icon-heart-empty"></i> Text translation and proofreading</h5>
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
                          <h5><i class="icon-docs-1"></i> Keep original style and format</h5>
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
                  <h5><i class="icon-docs-1"></i> Documents</h5>
                  <div class="col-md-12" id="list_documents">

                  </div>
              </span>


                                    <br>
                                    <button class="btn btn-block btn-primary">Check Quote</button>


                            </section>


                        </div>
                    </div><!--//row-->

                    <br>

                    <!-- The blueimp Gallery widget -->
                    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                        <div class="slides"></div>
                        <h3 class="title"></h3>
                        <a class="prev">‹</a>
                        <a class="next">›</a>
                        <a class="close">×</a>
                        <a class="play-pause"></a>
                        <ol class="indicator"></ol>
                    </div>
                    <!-- The template to display files available for upload -->
                    <script id="template-upload" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
            <button class="btn btn-primary start" disabled>
                <i class="glyphicon glyphicon-upload"></i>
                <span>Start</span>
            </button>
            {% } %}
            {% if (!i) { %}
            <button class="btn btn-warning cancel">
                <i class="glyphicon glyphicon-ban-circle"></i>
                <span>Cancel</span>
            </button>
            {% } %}
        </td>
    </tr>
    {% } %}
</script>
                    <!-- The template to display files available for download -->
                    <script id="template-download" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                <a class="file_upload" href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                <a class="file_upload" href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
            <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
            <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                <i class="glyphicon glyphicon-trash"></i>
                <span>Delete</span>
            </button>
            <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
            <button class="btn btn-warning cancel">
                <i class="glyphicon glyphicon-ban-circle"></i>
                <span>Cancel</span>
            </button>
            {% } %}
        </td>
    </tr>
    {% } %}
</script>
                </div>


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

