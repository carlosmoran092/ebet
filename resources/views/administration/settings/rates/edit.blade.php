<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	    <!-- Vendor styles -->
    {!! HTML::style('vendor/fontawesome/css/font-awesome.css') !!}
    {!! HTML::style('vendor/metisMenu/dist/metisMenu.css') !!}
    {!! HTML::style('vendor/animate.css/animate.css') !!}
    {!! HTML::style('vendor/bootstrap/dist/css/bootstrap.css') !!}
    {!! HTML::style('fontello/css/fontello.css') !!}
    {!! HTML::style('styles/admin.css') !!}
    {!! HTML::style('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') !!}

    <!-- App styles -->
    {!! HTML::style('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') !!}
    {!! HTML::style('fonts/pe-icon-7-stroke/css/helper.css') !!}
    {!! HTML::style('styles/style.css') !!}

{{--     http://jschr.github.io/bootstrap-modal/css/bootstrap-modal-bs3patch.css --}}
</head>
<body>
	<?php

$tl = json_decode($lang->target_languages);

?>


<div class="hpanel panel">
<div class="panel-heading hblue text-center">
	<h3><?php echo HTML::image('images/small/'.$lang->patch_image.'.png') ?>{!! $lang->title !!}
</div>
	<div class="panel-body">
{!! Form::open(array('action' => array('Settings\RateLanguageController@update',$lang->id),'before' => 'csrf','method' => 'put','id'=>$lang->id)) !!}

		@if (count($tl)>0)
		
			@foreach ($tl as $tl)				 
			<?php $tl = json_decode($tl); ?>
			<div class="form-group">
			<label>{!! $tl->title !!}</label>
			
			<input  type="text" value="0.050" name="{!! $tl->title !!}" class="form-control input_target">
			
			</div>

			@endforeach
							
		@endif

	<div class="form-group">
		{!! Form::submit('UPDATE', array('class'=>'btn btn-sm btn-default')); !!}
		{!! Form::button('CLOSE', array('class' => 'btn btn-sm btn-default','data-dismiss'=>'modal')); !!}
		{{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
	</div>

{!! Form::close() !!}

	</div>
</div>

{!!HTML::script('vendor/jquery/dist/jquery.min.js') !!}
{!!HTML::script('vendor/jquery-ui/jquery-ui.min.js')!!}
{!!HTML::script('vendor/slimScroll/jquery.slimscroll.min.js')!!}
{!!HTML::script('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')!!}
{!!HTML::script('vendor/bootstrap/dist/js/bootstrap.min.js')!!}

        <script>
            $(".input_target").TouchSpin({
                min: 0,
                max: 200,
                step: 0.020,
                decimals: 3,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '<i class="icon-dollar-1"></i>'
            });
        </script>


</body>
</html>


	
