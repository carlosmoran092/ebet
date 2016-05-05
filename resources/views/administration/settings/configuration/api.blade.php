@extends('layouts.master')

@section('add_style')
{!! HTML::style('bower_components/DataTables/css/jquery.dataTables.min.css') !!}

@stop

@section('contend_panel')
@section('head_panel')
@include('administration.settings.settings_menu')
@stop

<div class="row">
	<div class="col-lg-12">
		<div class="hpanel">
     <div class="panel-body">

      <h1>Configuration API Tradokey</h1>
      <br><br>
      <div>
       <!-- Nav tabs -->
       <ul class="nav nav-tabs" role="tablist">
         <li role="presentation" class="active"><a href="#languages" aria-controls="languages" role="tab" data-toggle="tab"><i class=" icon-docs-1"></i> Languages</a></li>
         <li role="presentation"><a href="#documents" aria-controls="documents" role="tab" data-toggle="tab"><i class=" icon-docs-1"></i> Documents Translation</a></li>
         <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class=" icon-video-1"></i> Video & Audio</a></li>
         <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="icon-window"></i> Websites</a></li>
         <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class=" icon-mic-outline"></i> Conferences</a></li>         
       </ul>

       <!-- Tab panes -->
       <div class="tab-content">
         {{--  --}}
         <div role="tabpanel" class="tab-pane active" id="languages">
          <div class="col-lg-12">
            <br>
          </div>
          <div class="table-responsive">
          </div>
          <div class="col-md-12">
            <table id="example" class="display" cellspacing="0" width="100%">
              <thead>
                <tr>
                 <th>Title</th>
                 <th>State</th>
                 <th>Actions</th>
               </tr>
             </thead>
             <tfoot>
              <tr>
               <th>Title</th>
               <th>State</th>
               <th>Actions</th>             
             </tr>
           </tfoot>
           <tbody>
             @foreach ($LA as $LA)
             <tr>
              <td><h3><a href="#"> <img src="{!! URL::to('images/small/'); !!}/{!!$LA->patch_image!!}.png "> {!! $LA->title !!}</a></h3></td>
                            <td>
                @if ($LA->active=="0")
                <h4><span class="label label-danger">Not Available</span></h4>
                @else
                <h4><span class="label label-success">Available</span></h4>
                @endif
              </td> 
              <td>
                <a href="{!! URL::to('settings/languages_available')!!}/{!!$LA->id!!}/edit" class="btn btn-info btn-sm"><i class="icon-cogs"></i> config</a>
              </td>
                      
            </tr>
            @endforeach                   



          </tbody>
        </table>
      </div>


    </div>
    {{--  --}}
    <div role="tabpanel" class="tab-pane " id="documents"><br>
     <div>
       <!-- Nav tabs -->
       <ul class="nav nav-tabs" role="tablist">
         <li role="presentation"><a href="#services" aria-controls="services" role="tab" data-toggle="tab">Services</a></li>
         <li role="presentation"><a href="#experts" aria-controls="experts" role="tab" data-toggle="tab">Experts</a></li>
         <li role="presentation"><a href="#delivery" aria-controls="delivery" role="tab" data-toggle="tab">Delivery</a></li>
       </ul>

       <!-- Tab panes -->
       <div class="tab-content">
         <div role="tabpanel" class="tab-pane active" id="services"><br>
           <div class="col-md-6">
             {{--  --}}

             {!! Form::open(array('method' => 'post', 'action' => 'Settings\ApiController@storteService','id'=>'SaveService')) !!}

             <div class="form-group col-md-9">
               <label for="">Title of service</label>
               <input type="text" class="form-control" name="title" value="" id="title-service" placeholder="" required="required">
             </div>
             <div class="form-group col-md-3">
               <label for="">Price/Word</label>
               <input type="number" name="rates" class="form-control" value="" min="0" id="rate-service" step="0.01" required="required">
             </div>
             <div class="form-group col-md-12">
              <button class="btn-md btn btn-primary" type="submit" id="InputSaveService">Guardar</button>
            </div>
            {!! Form::close() !!}
            {{--  --}}
            <div id="edit_service"></div>
          </div>

          <div class="col-md-6" id="print_service">
     
         </div>

         
       </div> {{-- End Services --}}

       <div role="tabpanel" class="tab-pane" id="experts">

         <div class="col-md-6" ><br>
           {{--  --}}
           {!! Form::open(array('method' => 'post', 'url' => 'settings/api/store_experts')) !!}
           <div class="form-group col-md-9">
             <label for="">Expert</label>
             <input type="text" class="form-control" id="" placeholder="" required="required">
           </div>
           <div class="form-group col-md-3">
             <label for="">Price/Word</label>
             <input type="number" class="form-control" min="0" id="" step="0.01" required="required">
           </div>
           <div class="form-group col-md-12">
             {!! Form::submit('Create',array('class' => 'btn btn-sm btn-default')) !!}
           </div>
           {!! Form::close() !!}
           {{--  --}}
           <div id="edit_expert"></div>
         </div>

         <div class="col-md-6"><br>
           <div class="table-responsive">
             <table class="table table-hover">
               <thead>
                 <tr>
                   <th width="60%">Title</th>
                   <th width="10%">Price/Word</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach ($experts as $expert)
                 <tr>
                   <td>{!! $expert->title !!}</td>
                   <td>{!! $expert->rates !!}</td>
                   <td>
                     <button type="button" class="btn btn-xs btn-default"><i class=" icon-pencil-alt"></i></button>
                     <button type="button" class="btn btn-xs btn-default"><i class=" icon-trash-8"></i></button>
                   </td>
                 </tr>
                 @endforeach
               </tbody>
             </table>
           </div>

         </div>


       </div> {{-- End Experts --}}


       <div role="tabpanel" class="tab-pane" id="delivery">

         <div class="col-md-6"><br>
           {{--  --}}
           {!! Form::open(array('method' => 'post', 'url' => 'settings/api/store_delivery')) !!}

           <div class="form-group col-md-9">
             <label for="">Delivery Type</label>
             <input type="text" name="title" class="form-control" id="" placeholder="" required="required">
           </div>


           <div class="form-group col-md-3">
             <label for="">Price/Word</label>
             <input type="number" name="rates" class="form-control" min="0" id="" step="0.01" required="required">
           </div>


           <div class="form-group col-md-12">
             {!! Form::submit('Create',array('class' => 'btn btn-sm btn-default')) !!}

           </div>
           {!! Form::close() !!}
           {{--  --}}
           <div id="edit_delivery"></div>
         </div>

         <div class="col-md-6"><br>

           <div class="table-responsive">
             <table class="table table-hover">
               <thead>
                 <tr>
                   <th width="60%">Title</th>
                   <th width="10%">Price/Word</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach ($deliveries as $delivery)
                 <tr>
                   <td>{!! $delivery->title !!}</td>
                   <td>{!! $delivery->rates !!}</td>
                   <td>
                     <button type="button" class="btn btn-xs btn-default"><i class=" icon-pencil-alt"></i></button>
                     <button type="button" class="btn btn-xs btn-default"><i class=" icon-trash-8"></i></button>
                   </td>
                 </tr>
                 @endforeach
               </tbody>
             </table>
           </div>
         </div>
       </div> {{-- End Delivery --}}
     </div>
   </div>
 </div><!-- 1 -->



 <div role="tabpanel" class="tab-pane" id="profile">...</div>
 <div role="tabpanel" class="tab-pane" id="messages">...</div>
 <div role="tabpanel" class="tab-pane" id="settings">...</div>

</div>

</div>





</div>

</div>
</div>
</div>

@stop


@section('add_script')


{!!HTML::script('vendor/jquery-flot/jquery.flot.js') !!}
{!!HTML::script('vendor/jquery-flot/jquery.flot.resize.js') !!}
{!!HTML::script('vendor/jquery-flot/jquery.flot.pie.js') !!}
{!!HTML::script('vendor/flot.curvedlines/curvedLines.js') !!}
{!!HTML::script('vendor/jquery.flot.spline/index.js') !!}

{!! HTML::script('bower_components/DataTables/js/jquery.dataTables.min.js') !!}

{!!HTML::script('scripts/homer.js') !!}
{!!HTML::script('scripts/charts.js') !!}
{!! HTML::script('administration/api.js') !!}



<script>
  $(document).ready(function($) {

   $(document).ready(function() {
    $('#example').DataTable();
  } );


   all_services ();
 });
</script>



@stop