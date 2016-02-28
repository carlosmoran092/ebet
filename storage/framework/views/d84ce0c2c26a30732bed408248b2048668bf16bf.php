<?php $__env->startSection('add_style'); ?>
<?php echo HTML::style('vendor/select2-3.5.2/select2.css'); ?>

<?php echo HTML::style('vendor/select2-bootstrap/select2-bootstrap.css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('head_panel'); ?>
<?php echo $__env->make('administration.settings.settings_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contend_panel'); ?>
<div class="hpanel col-md-12">

  <div class="panel-body">
    <?php /* <h1><?php echo $targets[0]; ?></h1> */ ?>
    
    <h3 class="col-md-12">Languages Available    </h3>
    
    <hr>
    <?php /* <form action="languages_submit" method="get" accept-charset="utf-8"> */ ?>
    <?php echo Form::open(array('action' => array('Settings\LanguagesAvailableController@update',$lang->id),'before' => 'csrf','method' => 'put','id'=>$lang->id)); ?>



    <?php echo Form::hidden('type', 'languages_available');; ?>

    <?php /*  */ ?>
    <div class="col-md-6 form-text-add">

      <div class="form-group col-lg-12">
        <label>Title</label>
        <input type="text" value="<?php echo $lang->title; ?>" id="" class="form-control" name="title"  required="true">
      </div>
      <div class="form-group col-lg-12">
        <label>Name</label>
        <input type="text" value="<?php echo $lang->name; ?>" id="" class="form-control" name="name"  required="true">
      </div>
      <div class="form-group col-lg-8">
        <label>Patch Image</label>
        <select class="form-control" name="patch_image"  required="true">      
         <?php foreach($CD as $cd): ?>
         <?php if($cd->name == $lang->patch_image): ?>
         <option value="<?php echo $cd->name; ?>" selected="selected"><?php echo $cd->name; ?></option> 
         <?php else: ?>
         <option value="<?php echo $cd->name; ?>"><?php echo $cd->name; ?></option> 
         <?php endif; ?>

         <?php endforeach; ?>          
       </select>
     </div>

     <div class="form-group col-lg-4">
      <label>Iso</label>
      <input type="text" value="<?php echo $lang->iso_code; ?>" id="" class="form-control" name="iso_code">
    </div>

    <div class="form-group col-lg-7">
      <label>Language Family</label>
      <select class="form-control" name="family"  required="true">
       <?php foreach($LF as $lf): ?>
       <?php if($lf->name == $lang->language_family): ?>
       <option value="<?php echo $lf->name; ?>" selected="selected"><?php echo $lf->name; ?></option> 
       <?php else: ?>
       <option value="<?php echo $lf->name; ?>"><?php echo $lf->name; ?></option> 
       <?php endif; ?>

       <?php endforeach; ?>   
     </select>
   </div>

   <div class="form-group col-lg-5">
     <label>State</label>
     <select class="form-control" name="state"  required="true">

       <option value="1" selected="selected">Active</option> 

       <option value="0">Inactive</option> 
     </select>
   </div>


   <div class="form-group  col-lg-12">
    <label>Translation into other</label>
  

<?php echo HTML::link('settings/rates_language/'.$lang->id.'/edit', 'Rates for '.$lang->title.' ',['class'=>'btn btn-block btn-default','data-toggle'=>'modal','data-target'=>'#modal_lang_available','data-backdrop'=>'static','data-keyboard'=>'false']);; ?>

    
 </div>



 <div class="form-group">
  <?php echo Form::submit('UPDATE', array('class' => 'btn btn-sm btn-default'));; ?>

</div>

</div>
<?php /*  */ ?>
<?php echo Form::close(); ?>

<?php /*  */ ?>
<div class="col-md-5 list-lang-add">
  <table class="table table-condensed table-hover congif-languages">                
    <thead>
      <tr>
        <th width="60%">Languages</th>        
        <th></th>

      </tr>
    </thead>
    <tbody>

      <?php foreach($LA as $la): ?>
      <tr><td>
        <?php echo HTML::image('images/small/'.$la->patch_image.'.png') ?> <?php echo $la->title; ?></td>
       <td> 


        </td>
        <td>
          <?php echo HTML::link('settings/languages_available/'.$la->id.'/edit', 'Edit',['class'=>'btn btn-xs btn-default']);; ?>

          <a class="btn btn-xs btn-default"><i class="icon-trash"></i></a>
        </td>

      </tr>
      <?php endforeach; ?>                

    </tbody>
  </table>

</div>
<?php /*  */ ?>        
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_lang_available" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('add_script'); ?>
<?php echo HTML::script('vendor/nicescroll/jquery.nicescroll.min.js'); ?>


<script>
  $(document).ready(  function() {
    $(".list-lang-add").niceScroll();
  });
</script>


<?php echo HTML::script('vendor/select2-3.5.2/select2.min.js'); ?>

<script>
  $(".js-source-states-2").select2();
</script>








<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>