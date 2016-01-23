<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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


<?php /*     http://jschr.github.io/bootstrap-modal/css/bootstrap-modal-bs3patch.css */ ?>
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
<?php echo Form::open(array('action' => array('Settings\RateLanguageController@update',$lang->id),'before' => 'csrf','method' => 'put','id'=>$lang->id)); ?>


		<?php if(count($tl)>0): ?>
		
			<?php foreach($tl as $tl): ?>				 
			<?php $tl = json_decode($tl); ?>
			<div class="form-group">
			<label><?php echo $tl->title; ?></label>
			
			<input  type="text" value="0.050" name="<?php echo $tl->title; ?>" class="form-control input_target">
			
			</div>

			<?php endforeach; ?>
							
		<?php endif; ?>

	<div class="form-group">
		<?php echo Form::submit('UPDATE', array('class'=>'btn btn-sm btn-default'));; ?>

		<?php echo Form::button('CLOSE', array('class' => 'btn btn-sm btn-default','data-dismiss'=>'modal'));; ?>

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


	
