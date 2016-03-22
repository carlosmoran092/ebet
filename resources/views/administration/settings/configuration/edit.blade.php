<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<title>Rates</title>

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
	{!! HTML::style('vendor/sweetalert/lib/sweet-alert.css') !!}

	{{--     http://jschr.github.io/bootstrap-modal/css/bootstrap-modal-bs3patch.css --}}

	<style>

		.add-rate{margin-bottom:20px;}
		.language-rate{background:#444;}

	</style>

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
				{!! Form::open(array('action' => array('Settings\RateLanguageController@update',$lang->id),'before' => 'csrf','method' => 'put','id'=>$lang->id,'class'=>'form_rate')) !!}



				<section id="rate">

				</section>

				<section class="col-md-12 add-rate col-sm-12">
					<a class="btn btn-default btn-md btn-block btn-add-rate">Add Rate</a>
				</section>




				<div class="form-group col-md-12">
					{!! Form::button('UPDATE', array('class'=>'btn btn-sm btn-default confirm-modal')); !!}
					{!! Form::button('CLOSE', array('class' => 'btn btn-sm btn-default close-modal','data-dismiss'=>'modal')); !!}
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
		{!! HTML::script ('vendor/sweetalert/lib/sweet-alert.min.js') !!}








</script>

</script>

</body>
</html>



