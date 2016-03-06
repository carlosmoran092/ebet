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
                    <form action="" method="POST" role="form">

                     <div class="form-group col-md-9">
                        <label for="">Title of service</label>
                        <input type="text" class="form-control" id="" placeholder="" required="required">
                     </div>


                     <div class="form-group col-md-3">
                        <label for="">Price/Word</label>
                        <input type="number" class="form-control" min="0" id="" step="0.01" required="required">
                     </div>


                     <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-sm btn-default">Create</button>

                     </div>
                  </form>
                  {{--  --}}
               </div>

               <div class="col-md-6">

                  <div class="table-responsive">
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th width="65%">Title</th>
                              <th width="15%">Price/Word</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>Title</td>
                              <td>Title</td>
                              <td>
                                 <button type="button" class="btn btn-xs btn-default"><i class=" icon-pencil-alt"></i></button>
                                 <button type="button" class="btn btn-xs btn-default"><i class=" icon-trash-8"></i></button>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>

               </div>
            </div> {{-- End Services --}}

            <div role="tabpanel" class="tab-pane" id="experts">

             <div class="col-md-6"><br>
              {{--  --}}
              <form action="" method="POST" role="form">

               <div class="form-group col-md-9">
               <label for="">Expert</label>
                  <input type="text" class="form-control" id="" placeholder="" required="required">
               </div>


               <div class="form-group col-md-3">
                  <label for="">Price/Word</label>
                  <input type="number" class="form-control" min="0" id="" step="0.01" required="required">
               </div>


               <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-sm btn-default">Create</button>

               </div>
            </form>
            {{--  --}}
         </div>

         <div class="col-md-6"><br>

            <div class="table-responsive">
               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th width="65%">Title</th>
                        <th width="15%">Price/Word</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Title</td>
                        <td>Title</td>
                        <td>
                           <button type="button" class="btn btn-xs btn-default"><i class=" icon-pencil-alt"></i></button>
                           <button type="button" class="btn btn-xs btn-default"><i class=" icon-trash-8"></i></button>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>

         </div>               


      </div> {{-- End Experts --}}


      <div role="tabpanel" class="tab-pane" id="delivery">
         
         <div class="col-md-6"><br>
              {{--  --}}
              <form action="" method="POST" role="form">

               <div class="form-group col-md-9">
               <label for="">Delivery Type</label>
                  <input type="text" class="form-control" id="" placeholder="" required="required">
               </div>


               <div class="form-group col-md-3">
                  <label for="">Price/Word</label>
                  <input type="number" class="form-control" min="0" id="" step="0.01" required="required">
               </div>


               <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-sm btn-default">Create</button>

               </div>
            </form>
            {{--  --}}
         </div>

         <div class="col-md-6"><br>

            <div class="table-responsive">
               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th width="65%">Title</th>
                        <th width="15%">Price/Word</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Title</td>
                        <td>Title</td>
                        <td>
                           <button type="button" class="btn btn-xs btn-default"><i class=" icon-pencil-alt"></i></button>
                           <button type="button" class="btn btn-xs btn-default"><i class=" icon-trash-8"></i></button>
                        </td>
                     </tr>
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




</script>
@stop