<?php $LA=$LA; ?>
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
    
    <h3 class="col-md-12">Edit - <?php echo HTML::image('images/small/'.$lang->patch_image.'.png'); ?><b><?php echo $lang->title; ?></b>    </h3>
    
    <hr>
    <?php /* <form action="languages_submit" method="get" accept-charset="utf-8"> */ ?>
    <?php echo Form::open(array('action' => array('Settings\LanguagesAvailableController@update',$lang->id),'before' => 'csrf','method' => 'post','id'=>'edit_lang')); ?>



    <?php echo Form::hidden('id', ''.$lang->id.'');; ?>

    <?php /*  */ ?>
    <div class="col-lg-12 form-text-add">

      <div class="form-group col-lg-4 col-sm-12">
        <label>Title</label>
        <input type="text" value="<?php echo $lang->title; ?>" id="" class="form-control" name="title"  required="true">
      </div>
      <div class="form-group col-lg-4 col-sm-12">
        <label>Name</label>
        <input type="text" value="<?php echo $lang->name; ?>" id="" class="form-control" name="name"  required="true">
      </div>
      <div class="form-group col-lg-4 col-sm-12">
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

     <div class="form-group col-lg-3">
      <label>Iso</label>
      <input type="text" value="<?php echo $lang->iso_code; ?>" id="" class="form-control" name="iso_code">
    </div>

    <div class="form-group col-lg-5">
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

   <div class="form-group col-lg-4">
     <label>State</label>
     <select class="form-control" name="state"  required="true">
      <?php if($lang->active=="1"): ?>
      <option class="text-success" value="1" selected="selected">Active</option> 
      <option value="0">Inactive</option> 
      <?php else: ?>
      <option value="1">Active</option> 
      <option value="0" selected="selected">Inactive</option> 
      <?php endif; ?>
    </select>
  </div>
  <div class="form-group  col-lg-12">
    <label>Translation into other</label>
    <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#myModal">
      <?php echo 'Rates for '.$lang->title; ?>

    </button>   
  </div>
  <div class="form-group">
    <?php echo Form::submit('Update '.$lang->title.'', array('class' => 'btn btn-sm btn-success','id' => 'update'));; ?>

  </div>
</div>
<?php /*  */ ?>
<?php echo Form::close(); ?>


</div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Rates</h4>
      </div>
      <div class="modal-body">
        <div class="row">

         <?php echo Form::open(array('action' => array('Settings\LanguagesAvailableController@updateTargetLanguages',$lang->id),'before' => 'csrf','method' => 'post','id'=>'edit_target')); ?>



         <?php echo Form::hidden('id', ''.$lang->id.'');; ?>


         <div class="col-lg-12">
          <div class="col-lg-10">
            <select name="selets[]" id="selects" class="form-control js-source-states-2" multiple="multiple">
              <?php foreach($LA as $La): ?>
              <?php if($La->title != $lang->title): ?>
              <option value="<?php echo $La->name; ?>"><?php echo $La->title; ?></option>             
              <?php endif; ?>                
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-md-2">
            <button id="add_rates_" class="btn btn-success">Update Rates</button>
          </div>
          <br>
        </div>        

        <div class="col-lg-12">
          <br>
          <?php foreach($LA as $LAG): ?>
          <div id="<?php echo $LAG->name; ?>" class="col-lg-12">
            <div class="form-group col-md-5">
              <h4><?php echo HTML::image('images/small/'.$LAG->patch_image.'.png'); ?> <?php echo $LAG->title; ?></h4>
            </div>          
            <input type="hidden" value="<?php echo $LAG->name; ?>" type="text" name="<?php echo $LAG->name; ?>[name][]"> 
            <input type="hidden" value="<?php echo $LAG->patch_image; ?>" type="text" name="<?php echo $LAG->name; ?>[patch_image][]">             
            <div class="form-group col-md-3 col-sm-4">
              <input type="number" name="<?php echo $LAG->name; ?>[rate][]" value="" min="0" step="0.010" class="form-control language-rate-value" ></div>

              <div class="form-group col-md-2 col-sm-3"> <button attr-id="<?php echo $LAG->name; ?>" class="btn btn-primary btn-xs hide_rate icon-cancel"></button> </div>
            </div>
            <?php endforeach; ?> 
          </div>
          

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        <?php /* <button type="button" id="save_targets" class="btn btn-primary">Save changes</button> */ ?>
      </div>
      <?php echo Form::close(); ?>

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

<?php echo HTML::script('administration/api.js'); ?>

<script>
  $(".js-source-states-2").select2();
  $(".languages_add").select2();
</script>


<script>
 var languages = new Object; 
 <?php foreach($LA as $la_sc): ?>
 languages["<?php echo $la_sc->name; ?>"] = {title:"<?php echo $la_sc->title; ?>",visible: false};
 <?php endforeach; ?>

 var arr_lang=(Object.keys(languages));

 function hide_languages (){
  for (var i = 0; i < arr_lang.length; i++) {
    if (languages[""+arr_lang[i]+""].visible == false) {
      languages[""+arr_lang[i]+""].visible = false;
        //console.log("item" +i+ " escondido");   
        ite = languages[""+arr_lang[i]+""].nombre;
        $("#"+arr_lang[i]+"").hide();     

      }
    }
  };

  function show_language (){
    i=0;
    located = false;
    while(encontrado==false){
      if (languages[""+arr_lang[i]+""].visible==false){
        ite = languages[""+arr_lang[i]+""].nombre;
        languages[""+arr_lang[i]+""].visible = true;
        $("#"+ite+"").show();
        located = true;
        console.log("item "+i+" desbloqueado");
      } else{i+=1; console.log("nada de nada");}
    }
  };

// Btn Hide Rate Language

$("body").on('click', '.hide_rate', function(event) {
  event.preventDefault();

  btn=$(this).attr('attr-id');
  reset=""+btn+"[rate][]";
  $("[name='"+reset+"']").removeAttr('value');
  languages[""+btn+""].visible = false;
  $("#"+btn+"").hide();  
  console.log(reset);    
});

$("body").on('click', '#add_rates_', function(event) {
  event.preventDefault();
  var all = $("#selects").val();
  hide_languages();
  for (var i = 0; i < all.length; i++) {
    $("#"+all[i]+"").show();
    languages[""+all[i]+""].visible = true;
  };
});

</script>

<?php /* 
function update_rates
Recorre objeto languages
captura valor de los input
Los guarda en objeto 
*/ ?>

<script>
  var share_data = new Object;
  $("body").on('click', '#save_update', function(event) {
    event.preventDefault();
    var data_lang = new Object;
    for (var i = 0; i < arr_lang.length; i++) {
      if (languages.arr_lang[i].visible==true) {
       data_lang.arr_lang[i].name=$("[name='"+arr_lang[i]+"[name][]']").val();
       data_lang.arr_lang[i].title=$("[name='"+arr_lang[i]+"[title][]']").val();
       data_lang.arr_lang[i].patch_image=$("[name='"+arr_lang[i]+"[patch_image][]']").val();
       data_lang.arr_lang[i].rate=$("[name='"+arr_lang[i]+"[rate][]']").val();

     } else{
      console.log("nada");
    };
  };

});
</script>


<script>

  $(document).ready(function($) {
    hide_languages();
  });

</script>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>