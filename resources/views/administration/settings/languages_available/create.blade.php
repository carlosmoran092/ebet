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
        <h3 class="col-md-12">Languages Available</h3>
        <hr>
        <div class="col-md-12">
          @if (Session::has('message'))
          <div class="alert alert-info">{!! Session::get('message') !!}</div>
          @endif
        </div>
        {{-- <form action="languages_submit" method="get" accept-charset="utf-8"> --}}
    {!! Form::open(array('action' => 'Settings\LanguagesAvailableController@store','before' => 'csrf','method' => 'post')) !!}

    {!! Form::hidden('type', 'languages_available'); !!}
{{--  --}}
        <div class="col-md-5 form-text-add">

            <div class="form-group col-lg-12">
                <label>Title</label>
                <input type="text" value="" id="" class="form-control" name="title"  required="true">
            </div>
            <div class="form-group col-lg-12">
                <label>Name</label>
                <input type="text" value="" id="" class="form-control" name="name"  required="true">
            </div>
            <div class="form-group col-lg-8">
                <label>Patch Image</label>
                <select class="form-control" name="patch_image"  required="true">
                   @foreach ($CD as $cd)
                        <option value="{!! $cd->name !!}">{!! $cd->name !!}</option> 
                   @endforeach
                                     
                </select>
            </div>

               <div class="form-group col-lg-4">
                <label>Iso</label>
                <input type="text" value="" id="" class="form-control" name="iso_code">
               </div>

                    <div class="form-group col-lg-12">
                              <label>Language Family</label>
                              <select class="form-control" name="family"  required="true">
                                   <option value=""></option>
                                    @foreach ($LF as $lf)
                                    <option value="{!! $lf->name !!}">{!! $lf->name !!}</option> 
                                    @endforeach


                              </select>
                         </div>


                       <div class="form-group  col-lg-12">
                            <label>Translation into other</label>
                            <select class="js-source-states-2 form-group" multiple="multiple" multiple name="target_languages[]" style="width: 100%">
                              
                             {{--  <option value="hello" selected="selected">hello</option> --}}
                              @foreach ($LA as $la)
                                   <option value="{!!$la->title!!}">{!!$la->title!!}</option>
                              @endforeach



                            </select>
                        </div>

                    {{--                          
                         <div class="form-group  col-lg-12">
                              @foreach ($LA as $la)
                                   {{$la->target_languages}}
                                   <br>
                              @endforeach
                         </div> --}}


                        <div class="form-group">
                            {!! Form::submit('Submit New!', array('class' => 'btn btn-sm btn-default')); !!}
                        </div>

        </div>
        {{--  --}}
        {!! Form::close() !!}
        {{--  --}}
        <div class="col-md-7 list-lang-add">
            <table class="table table-striped table-condensed congif-languages">                
                <thead>
                    <tr>
                        <th width="50%">Languages</th>
                        <th>Target Languages</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
            @foreach ($LA as $la)
              <tr><td>
              <?php echo HTML::image('images/small/'.$la->patch_image.'.png') ?> {!! $la->title !!}</td>

              <td> 
                  
              {!! HTML::link('settings/rates_language/'.$la->id.'/edit', 'rates',['class'=>'btn btn-xs btn-default','data-toggle'=>'modal','data-target'=>'#myModal','data-backdrop'=>'static','data-keyboard'=>'false']); !!}
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
$(document).ready(  function() {  $(".list-lang-add").niceScroll();  });
</script>


{!! HTML::script('vendor/select2-3.5.2/select2.min.js')!!}
<script>
$(".js-source-states-2").select2();
</script>
    

@stop