@extends('layouts.master')

@section('contend_panel')

<div class="row">
	<div class="col-lg-12">
		<div class="hpanel">
         <div class="panel-body">

            <h1>Configuration API Tradokey</h1>






            <br><br>
            <div>

              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#services" aria-controls="services" role="tab" data-toggle="tab">Services</a></li>
                <li role="presentation"><a href="#experts" aria-controls="experts" role="tab" data-toggle="tab">Experts</a></li>

                <li role="presentation"><a href="#delivery" aria-controls="delivery" role="tab" data-toggle="tab">Delivery</a></li>

             </ul>

             <!-- Tab panes -->
             <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="services"><br>
                   <div class="col-md-6">
                      {{--  --}}
                      {!! Form::open(array('method' => 'post', 'url' => 'settings/api/store_service')) !!}


                      <div class="form-group col-md-9">
                        <label for="">Title of service</label>
                        <input type="text" class="form-control" name="title" id="" placeholder="" required="required">
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
                     <div id="edit_service"></div>
                  </div>

                  <div class="col-md-6">

                     <div class="table-responsive">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th width="60%">Title</th>
                                 <th width="10%">Price/Word</th>
                              </tr>
                           </thead>
                           <tbody>

                              @foreach ($services as $service)

                              <tr>
                                 <td>{!! $service->title !!}</td>
                                 <td>{!! $service->rates !!}</td>
                                 <td>
                                    <a id="service_{!! $service->id !!}"  type="button" class="edit_service btn btn-xs btn-default"><i class=" icon-pencil-alt"></i></a>
                                    <a href="{!! URL::to('delete/service') !!}/{!! $service->id !!}" type="button" class="btn btn-xs btn-default"><i class=" icon-trash-8"></i></a>
                                 </td>
                              </tr>
                              @endforeach

                           </tbody>
                        </table>
                     </div>

                  </div>
               </div> {{-- End Services --}}

               <div role="tabpanel" class="tab-pane" id="experts">

                 <div class="col-md-6"><br>
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

{!!HTML::script('scripts/homer.js') !!}
{!!HTML::script('scripts/charts.js') !!}

<script>
   $(document).ready(function($) {
    $('html').on('click', '.edit_service', function(event) {
      $('#edit_service')
      .html("<div class='col-md-12'>{!! Form::open(array('action' => array('Settings\ApiController@UpdateService'),'before' => 'csrf','method' => 'put')) !!}          <div class='form-group col-md-9'>
                     <label>Expert</label>
                     <input type='text' class='form-control' placeholder='' required='required'>
                  </div>


                  <div class='form-group col-md-3'>
                     <label >Price/Word</label>
                     <input type='number' class='form-control' min='0'  step='0.01' required='required'>
                  </div>{!! Form::close() !!}</div>");
   });
 });
</script>


</script>
@stop