@extends('layouts.website')

@section('add_style')
    <link rel="stylesheet" href="vendor/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" />
    <link rel="stylesheet" href="vendor/select2-3.5.2/select2.css" />

    <link rel="stylesheet" href="country-select-js-master\build\css\countrySelect.min.css">
    <link rel="stylesheet" href="vendor/select2-3.5.2/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap/select2-bootstrap.css" />

    {!! HTML::style('vendor/sweetalert/lib/sweet-alert.css') !!}


@stop


@section('contend_site')<br>
	<div class="row">
    <div class="container">
        <div class="col-md-8">
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ipsam ex eveniet possimus error aliquam magnam placeat, doloremque odit nesciunt maxime ullam saepe reprehenderit facilis, a totam, eligendi, sunt voluptatibus!</h4>
            <div class="hr-line-dashed"></div>


<div class="col-md-12">
    <br>
</div>

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
                                    <input type="text" value="" id="" class="form-control" name="algo" >
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Web Site or Public Linkedin</label>
                                    <input type="text" value="" id="" class="form-control" name="website" placeholder="http://">
                                </div>

                                <div class="form-group col-lg-6 col-sm-6">
                                    <label>Home Country</label>

                                    <div class="form-group">
                                        <input id="country_selector" class="form-control input-sm col-sm-12" type="text" style="min-width: 332px;min-height: 35px;">
                                        <label for="country_selector" style="display:none;">Select a country here...</label>
                                    </div>
                                    <div class="form-item" style="display:none;">
                                        <input class="form-group" type="text" id="country_selector_code" name="home_country" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" style="width:100%" />
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
                                <option value="general">General</option>
                                <option value="hungarian">Literature</option>
                                <option value="medic">Medic</option>
                                <option value="spanish">Academic</option>
                                <option value="diplomatic">Diplomatic</option>
                                <option value="technological">Technological</option>
                                <option value="politic">Politic</option>                                
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


            
			</form>
    </div><!-- -->
        <div class="col-md-4 hidden-xs hidden-sm">
            <img src="http://placehold.it/350x550" class="img-responsive">
        </div>
</div>
</div>



@stop


@section('add_script')

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




@stop