@extends('layouts.master')
@section('add_style')
{!! HTML::style('vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')  !!}
{!! HTML::script('bower_components/angular/angular.min.js')  !!}
{!! HTML::script ('bower_components/angular-bootstrap/ui-bootstrap.min.js') !!}

@stop

@section('contend_panel')
<div class="hpanel">
	<div class="panel-body">
		<a class="small-header-action" href="#">
			<div class="clip-header">
				<i class="fa fa-arrow-down"></i>
			</div>
		</a>

		<div id="hbreadcrumb" class="pull-right">
			@if( isset($id))
			{!! '<button class="btn btn-default btn-md"><i class="fa fa-file-pdf-o"></i> PDF</button> <button class="btn btn-default btn-md"><i class="fa fa-pencil-square-o"></i> Edit</button>' !!}
			@endif
			<button class="btn btn-default btn-md">Create New</button>
		</div>
		<h2 class="font-light m-b-xs">
			Quotation
		</h2>
	</div>
</div>
<div class="hpanel" ng-app="langApp">
	<div class="panel-body" ng-controller="langController as langs">
		<div class="form-group col-md-6">
			<label for="exampleInputEmail1">Type of Service</label>
			<select name="" id="" class=" form-control trw-service-selects">
				<option value="">Documents Translation</option>
				<option value="">Documents Translation &amp; Proofreading</option>
			</select>
			<br>
			<label for="exampleInputEmail1">State</label>
			<select name="" id="" class="form-control trw-service-selects">
				<option value="">Checking</option>
				<option value="">Sent</option>
				<option value="">Approved</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="exampleInputEmail1">Name of Client</label>
			<input type="text" class="form-control trw-service-selects">
			<br>
			<label for="exampleInputEmail1">Email</label>
			<input type="text" class="form-control trw-service-selects">

		</div>

		<!-- -->

		<div class="col-md-12" id="contend-app-trw">

			<div class="col-md-8">

				<div class="hpanel col-md-6">
					<div class="panel-body">
						<button class="btn btn-default btn-block btn-select-trw" data-toggle="modal" data-target=".select-country-1"><i class="icon-plus-6"></i> Original Language</button><br>
						<div id="target-lang">
						</div>
						<div class="twr-lang">
							{!! HTML::image ('images/small/France.png') !!}<span class="name-language">French</span><i class="icon-cancel-4"></i>
						</div>
					</div>
				</div>

				<div class="hpanel col-md-6">
					<div class="panel-body">
						<button class="btn btn-default btn-block btn-select-trw"><i class="icon-plus-6"></i> Target Language</button><br>

						<div class="twr-lang">
							{!! HTML::image ('images/small/United States.png') !!}<span class="name-language">English</span><i class="icon-cancel-4"></i>
						</div>
						<div class="twr-lang">
							{!! HTML::image ('images/small/South Korea.png') !!}<span class="name-language">Korean</span><i class="icon-cancel-4"></i>
						</div>

					</div>
				</div>

				<div class="hpanel col-md-12">
					<div class="panel-body">
						<button class="btn btn-default btn-block btn-select-trw"><i class="icon-plus-6"></i> Add Expert</button><br>


						<div class="twr-professions col-md-3">
							<div class=""><i class="icon-cancel-4 pull-right cancel-trw-icon"></i></div>
							<i class="icon-profession icon-stethoscope col-md-4"></i>
							<span class="col-md-8 col-sm-12 col-xs-12">Medical Expert</span>
						</div>

						<div class="twr-professions col-md-3">
							<div><i class="icon-cancel-4 pull-right cancel-trw-icon"></i></div>
							<i class="icon-profession icon-hammer col-md-4"></i>
							<span class="col-md-8 col-sm-12 col-xs-12">Legal Expert</span>
						</div>

						<div class="twr-professions col-md-3">
							<div><i class="icon-cancel-4 pull-right cancel-trw-icon"></i></div>
							<i class="icon-profession icon-book-open col-md-4"></i>
							<span class="col-md-8 col-sm-12 col-xs-12">Literary Expert</span>
						</div>


					</div>
				</div>

			</div>


			<div role="tabpanel" id="requirement" class="tab-pane active">

				<div class="hpanel hbgblue col-md-4">
					<div class="panel-body">
						<div class="text-center">
							<h3>Cost of service</h3>
							<p class="text-big font-light">
								$797.00
							</p>
						</div>
					</div>
					<div class="panel-footer">
						<div class="input-group"><input type="text" placeholder="Number of words" class="form-control"> <span class="input-group-btn"> <button type="button" class="btn btn-default">Calculate
						</button> </span></div>
					</div>
				</div>


				<hr>

				<div class="col-md-12">



				</div>

			</div>

			<!--  MODAL LANGUAGE   -->
			<div class="modal fade select-country-1"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
				<div class="modal-dialog modal-lg" style="width: 80%">
					<div class="modal-content">
						<div class="panel">
							<div class="panel-body trw-select-lang">


							</div>
						</div>
					</div>
				</div>
				<!-- MODAL LANGUAGE END  -->


			</div>
			<!--    -->





		</div>

		<!-- -->

	</div>

</div>


@stop
@section('add_script')
<!-- Angular-->
{!! HTML::script('vendor/iCheck/icheck.min.js') !!}
{!! HTML::script('JS/app.js') !!}

@stop