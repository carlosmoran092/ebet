@extends('layouts.master')

<?php $LA=$LA; ?>
@section('add_style')
{!! HTML::style('vendor/select2-3.5.2/select2.css')!!}
{!! HTML::style('vendor/select2-bootstrap/select2-bootstrap.css')!!}
@stop

@section('head_panel')
@include('administration.settings.settings_menu')
@stop

@section('contend_panel')
<div class="hpanel col-md-12">

  <div class="panel-body">
    {{-- <h1>{!! $targets[0] !!}</h1> --}}
    
    <h3 class="col-md-12">Edit - {!! HTML::image('images/small/'.$lang->patch_image.'.png') !!}<b>{!! $lang->title !!}</b>    </h3>
    
    <hr>
    {{-- <form action="languages_submit" method="get" accept-charset="utf-8"> --}}
    {!! Form::open(array('action' => array('Settings\LanguagesAvailableController@update',$lang->id),'before' => 'csrf','method' => 'put','id'=>$lang->id)) !!}


    {!! Form::hidden('type', 'languages_available'); !!}
    {{--  --}}
    <div class="col-lg-12 form-text-add">

      <div class="form-group col-lg-4 col-sm-12">
        <label>Title</label>
        <input type="text" value="{!! $lang->title !!}" id="" class="form-control" name="title"  required="true">
      </div>
      <div class="form-group col-lg-4 col-sm-12">
        <label>Name</label>
        <input type="text" value="{!! $lang->name !!}" id="" class="form-control" name="name"  required="true">
      </div>
      <div class="form-group col-lg-4 col-sm-12">
        <label>Patch Image</label>
        <select class="form-control" name="patch_image"  required="true">      
         @foreach ($CD as $cd)
         @if ($cd->name == $lang->patch_image)
         <option value="{!! $cd->name !!}" selected="selected">{!! $cd->name !!}</option> 
         @else
         <option value="{!! $cd->name !!}">{!! $cd->name !!}</option> 
         @endif

         @endforeach          
       </select>
     </div>

     <div class="form-group col-lg-3">
      <label>Iso</label>
      <input type="text" value="{!! $lang->iso_code !!}" id="" class="form-control" name="iso_code">
    </div>

    <div class="form-group col-lg-5">
      <label>Language Family</label>
      <select class="form-control" name="family"  required="true">
       @foreach ($LF as $lf)
       @if ($lf->name == $lang->language_family)
       <option value="{!! $lf->name !!}" selected="selected">{!! $lf->name !!}</option> 
       @else
       <option value="{!! $lf->name !!}">{!! $lf->name !!}</option> 
       @endif

       @endforeach   
     </select>
   </div>

   <div class="form-group col-lg-4">
     <label>State</label>
     <select class="form-control" name="state"  required="true">
      @if($lang->active=="1")
      <option class="text-success" value="1" selected="selected">Active</option> 
      <option value="0">Inactive</option> 
      @else
      <option value="1">Active</option> 
      <option value="0" selected="selected">Inactive</option> 
      @endif
    </select>
  </div>


  <div class="form-group  col-lg-12">
    <label>Translation into other</label>

    <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#myModal">
      {!! 'Rates for '.$lang->title !!}
    </button>   
  </div>



  <div class="form-group">
    {!! Form::submit('Update '.$lang->title.'', array('class' => 'btn btn-sm btn-success')); !!}
  </div>

</div>
{{--  --}}
{!! Form::close() !!}

</div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-10">
              <select name="selets[]" id="selects" class="form-control js-source-states-2" multiple="multiple">
                @foreach ($LA as $La)
                @if ($La->title != $lang->title)
                <option value="{!! $La->name !!}">{!! $La->title !!}</option>             
                @endif                
                @endforeach
              </select>
            </div>
            <div class="col-md-2">
              <button id="add_rates_" class="btn btn-success">Update Rates</button>
            </div>
            <br>
          </div>        

          <div class="col-lg-12">
            <br>
            @foreach ($LA as $LAG)
            <div id="{!! $LAG->name !!}" class="col-lg-12">
              <div class="form-group col-md-5">
                <h4>{!! HTML::image('images/small/'.$LAG->patch_image.'.png') !!} {!! $LAG->title !!}</h4>
              </div>          
              <input type="hidden" type="text" name="{!! $LAG->name !!}[name][]"> 
              <input type="hidden" type="text" name="{!! $LAG->name !!}[patch_image][]">             
              <div class="form-group col-md-3 col-sm-4">
                <input type="number" name="{!! $LAG->name !!}[rate][]" value="" min="0" step="0.010" class="form-control language-rate-value" ></div>
              </div>
              @endforeach 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" id="save_update" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  @stop


  @section('add_script')
  {!! HTML::script('vendor/nicescroll/jquery.nicescroll.min.js') !!}

  <script>
    $(document).ready(  function() {
      $(".list-lang-add").niceScroll();
    });
  </script>


  {!! HTML::script('vendor/select2-3.5.2/select2.min.js')!!}
  <script>
    $(".js-source-states-2").select2();
    $(".languages_add").select2();
  </script>


  <script>
   var languages = new Object; 
   @foreach ($LA as $la_sc)
   languages["{!! $la_sc->name !!}"] = {title:"{!! $la_sc->title !!}",visible: false};
   @endforeach

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

  $("body").on('click', '#add_rates_', function(event) {
    event.preventDefault();
    var all = $("#selects").val();
    hide_languages();
    for (var i = 0; i < all.length; i++) {
      $("#"+all[i]+"").show();
    };
  });

</script>

//function update_rates
//Recorre objeto languages
//captura valor de los input
//Los guarda en objeto

<script>
var share_data = new Object;
  $("body").on('click', '#save_update', function(event) {
    event.preventDefault();
    var data_lang = new Object;
    for (var i = 0; i < arr_lang.length; i++) {
      if (languages[""+arr_lang[i]+""].visible==true) {
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






@stop