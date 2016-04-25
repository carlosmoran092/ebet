<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<title>Rates</title>

	<!-- Vendor styles -->
	<?php echo HTML::style('vendor/fontawesome/css/font-awesome.css'); ?>

	<?php echo HTML::style('vendor/metisMenu/dist/metisMenu.css'); ?>

	<?php echo HTML::style('vendor/animate.css/animate.css'); ?>

	<?php echo HTML::style('vendor/bootstrap/dist/css/bootstrap.css'); ?>

	<?php echo HTML::style('fontello/css/fontello.css'); ?>

	<?php echo HTML::style('styles/admin.css'); ?>

	<?php echo HTML::style('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css'); ?>


	<!-- App styles -->
	<?php echo HTML::style('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css'); ?>

	<?php echo HTML::style('fonts/pe-icon-7-stroke/css/helper.css'); ?>

	<?php echo HTML::style('styles/style.css'); ?>

	<?php echo HTML::style('vendor/sweetalert/lib/sweet-alert.css'); ?>


	<?php /*     http://jschr.github.io/bootstrap-modal/css/bootstrap-modal-bs3patch.css */ ?>

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
			<h3><?php echo HTML::image('images/small/'.$lang->patch_image.'.png') ?><?php echo $lang->title; ?>

			</div>
			<div class="panel-body">
				<?php echo Form::open(array('action' => array('Settings\RateLanguageController@update',$lang->id),'before' => 'csrf','method' => 'put','id'=>$lang->id,'class'=>'form_rate')); ?>

				<section id="rate">
				</section>
				<section class="col-md-12 add-rate col-sm-12">
					<?php foreach($LA as $LA): ?>
					<div class="language-rate">
						<div class="form-group col-md-2">
							<h4><?php echo $LA->title; ?></h4>
						</div>
						<div class="form-group col-md-6 col-sm-7">
							<input type="hidden" type="text" name="<?php echo $LA->name; ?>[name][]">
						</div>
						<div class="form-group col-md-4 col-sm-4">
							<input type="number" name="<?php echo $lA->name; ?>[rate][]" value="" min="0" step="0.010" class="form-control language-rate-value" ></div>
						</div>
						<?php endforeach; ?>
					</section>
					

					<div class="form-group col-md-12">
						<?php echo Form::button('UPDATE', array('class'=>'btn btn-sm btn-default confirm-modal'));; ?>

						<?php echo Form::button('CLOSE', array('class' => 'btn btn-sm btn-default close-modal','data-dismiss'=>'modal'));; ?>

						<?php /* <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> */ ?>
					</div>

					<?php echo Form::close(); ?>


				</div>
			</div>

			<?php echo HTML::script('vendor/jquery/dist/jquery.min.js'); ?>

			<?php echo HTML::script('vendor/jquery-ui/jquery-ui.min.js'); ?>

			<?php echo HTML::script('vendor/slimScroll/jquery.slimscroll.min.js'); ?>

			<?php echo HTML::script('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js'); ?>

			<?php echo HTML::script('vendor/bootstrap/dist/js/bootstrap.min.js'); ?>

			<?php echo HTML::script ('vendor/sweetalert/lib/sweet-alert.min.js'); ?>



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

			<script>
				$('html').on('click', '.btn-add-ratex', function(event) {
					$('#rate').append('<div class="language-rate"><div class="form-group col-md-1 col-sm-1 btn-remove"><a class="btn btn-xs btn-default icon-cancel-3 cancel" data="12345"></a></div><div class="form-group col-md-7 col-sm-7"><select value="" name="" class="language-name form-control"></select></div><div class="form-group col-md-4 col-sm-4"><input type="number" name="" value="" min="0" step="0.010" class="form-control language-rate-value" ></div></div>');
					loadSelects();

				});


				$.ajaxSetup({ cache: false });
				var data = [];		

				var jqxhr = $.getJSON( "http://<?php echo $_SERVER['SERVER_NAME'];; ?>/settings/rates_language/getalllanguages", function() {
					console.log( "success" );
					data = jqxhr.responseJSON;
				})
				.done(function() {
					console.log( "second success" );
				})
				.fail(function() {
					console.log( "ERROR" );
				})
				.always(function() {
					console.log( "complete" );
				});
				jqxhr.complete(function() {
					console.log( "Complete!!" );
				});

				function loadSelects(){
					for (var i = 0; i < data.length; i++) {
						$('select:last').append('<option value="'+data[i].title+','+data[i].patch_image+'" data-id="'+data[i].id+'" >'+data[i].title+'</option>');
				// 
			};
		}
/*
Modal
*/


$('body').on('click', '.cancel', function(event) {
	$(this).parent().parent().remove();
});

$('body').on('click', '.confirm-modal', function(event) {				
	setRates();

});


function setRates (){
	var num_r_lang = $( ".language-rate" ).size(); // Numero de idiomas disponibles

	data_rate = new Object();

	new_data  = [];



	

	for (var i = 0; i < num_r_lang; i++) {

		item_rate = new Object();

		/* title_and_img */
		valueSelect = $('select.language-name:nth('+i+')').val();
		tai = valueSelect.split(",");

		item_rate.title =  tai[0];
		item_rate.image =  tai[1]; 
		item_rate.rate  =  parseFloat( $("input.language-rate-value:nth("+i+")").val());
		/* Save item */
		new_data.push(item_rate);

		
	};
	//Imprimo variables
	//console.log(new_data); 
	json_new_data = JSON.stringify(new_data);
	//alert(json_new_data);

	$.ajax({
		url: 'http://<?php echo $_SERVER['SERVER_NAME'];; ?>/settings/languages_available/<?php echo $lang->id; ?>/update_target',
		type: "post",
		data: {json_new_data},
		//data: [JSON.stringify(new_data)],


		success: function(data){
			console.log(data);
		},
		error: function() {
			callback('error');
		}
	});      

}




</script>

</script>

</body>
</html>



