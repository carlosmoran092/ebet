@extends('layouts.master')

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
    
    <h3 class="col-md-12">Languages Available    </h3>
    
    <hr>
    {{-- <form action="languages_submit" method="get" accept-charset="utf-8"> --}}
    {!! Form::open(array('action' => array('Settings\LanguagesAvailableController@update',$lang->id),'before' => 'csrf','method' => 'put','id'=>$lang->id)) !!}


    {!! Form::hidden('type', 'languages_available'); !!}
    {{--  --}}
    <div class="col-md-6 form-text-add">

      <div class="form-group col-lg-12">
        <label>Title</label>
        <input type="text" value="{!! $lang->title !!}" id="" class="form-control" name="title"  required="true">
      </div>
      <div class="form-group col-lg-12">
        <label>Name</label>
        <input type="text" value="{!! $lang->name !!}" id="" class="form-control" name="name"  required="true">
      </div>
      <div class="form-group col-lg-8">
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

     <div class="form-group col-lg-4">
      <label>Iso</label>
      <input type="text" value="{!! $lang->iso_code !!}" id="" class="form-control" name="iso_code">
    </div>

    <div class="form-group col-lg-7">
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

   <div class="form-group col-lg-5">
     <label>State</label>
     <select class="form-control" name="state"  required="true">

       <option value="1" selected="selected">Active</option> 

       <option value="0">Inactive</option> 
     </select>
   </div>


   <div class="form-group  col-lg-12">
    <label>Translation into other</label>
  

{!! HTML::link('settings/rates_language/'.$lang->id.'/edit', 'Rates for '.$lang->title.' ',['class'=>'btn btn-block btn-default','data-toggle'=>'modal','data-target'=>'#modal_lang_available','data-backdrop'=>'static','data-keyboard'=>'false']); !!}
    
 </div>



 <div class="form-group">
  {!! Form::submit('UPDATE', array('class' => 'btn btn-sm btn-default')); !!}
</div>

</div>
{{--  --}}
{!! Form::close() !!}
{{--  --}}
<div class="col-md-5 list-lang-add">
  <table class="table table-condensed table-hover congif-languages">                
    <thead>
      <tr>
        <th width="60%">Languages</th>        
        <th></th>

      </tr>
    </thead>
    <tbody>

      @foreach ($LA as $la)
      <tr><td>
        <?php echo HTML::image('images/small/'.$la->patch_image.'.png') ?> {!! $la->title !!}</td>
       <td> 


        </td>
        <td>
          {!! HTML::link('settings/languages_available/'.$la->id.'/edit', 'Edit',['class'=>'btn btn-xs btn-default']); !!}
          <a class="btn btn-xs btn-default"><i class="icon-trash"></i></a>
        </td>

      </tr>
      @endforeach                

    </tbody>
  </table>

</div>
{{--  --}}        
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
</script>








@stop