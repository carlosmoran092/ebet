@extends('layouts.master')

@section('add_style')
<link rel="stylesheet" href="vendor/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css" />
<link rel="stylesheet" href="vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" />
<link rel="stylesheet" href="vendor/select2-3.5.2/select2.css" />

<link rel="stylesheet" href="country-select-js-master\build\css\countrySelect.min.css">
<link rel="stylesheet" href="vendor/select2-3.5.2/select2.css" />
<link rel="stylesheet" href="vendor/select2-bootstrap/select2-bootstrap.css" />

{!! HTML::style('vendor/sweetalert/lib/sweet-alert.css') !!}
@stop

@section('contend_panel')



<div class="hpanel">
	<div class="panel-body">


        <div class="col-md-3">
         
            {{--  --}}
            <div class="hpanel filter-item">
                <a href="#">
                    <div class="panel-body">
                       <div class="pull-right text-right">
                        <h4><span class="label label-success">3</span></h4>
                    </div>
                    <h3 class="m-b-xs"><i class="icon-loop"></i> All</h3>                                             
                </div>
            </a>
        </div>
        {{--  --}}

        {{--  --}}
        <div class="hpanel filter-item">
            <a href="#">
                <div class="panel-body">
                   <div class="pull-right text-right">
                    <h4><span class="label label-success">3</span></h4>
                </div>
                <h3 class="m-b-xs"><i class="icon-building"></i> Companies</h3>                                             
            </div>
        </a>
    </div>
    {{--  --}}

    {{--  --}}
    <div class="hpanel filter-item">
        <a href="#">
            <div class="panel-body">
               <div class="pull-right text-right">
                <h4><span class="label label-success">3</span></h4>
            </div>
            <h3 class="m-b-xs"><i class="icon-male-2"></i> Personal</h3>                                             
        </div>
    </a>
</div>
{{--  --}}

</div>


<div class="col-lg-9">





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
        msg:'(max 550 characters)',
        goal: 550
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
