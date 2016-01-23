@extends('layouts.master')
@section('head_panel')
@include('administration.settings.settings_menu')
@stop
@section('contend_panel')
	<div class="col-md-12">
 

 		<div class="hpanel hbgblue" style="margin-bottom:4px;">
 			<div class="panel-body">
 			<div class="col-md-3 col-xs-6">
 				<h3>Language</h3>
 			</div>

 			<div class="col-md-3 col-xs-6">
 				<h3>Public Interest</h3>
 			</div>

 			 <div class="col-md-1 col-sm-2">
 				<h3>WT</h3>
 			</div>

 			<div class="col-md-3">
 				<h3>Targets Available</h3>
 			</div>

 			 <div class="col-md-2 pull-right">
 				<a href="languages_available/add" style="color:#ffffff"><h3 class="pull-right"><i class="icon-plus-4"></i> Add New</h3> </a>
 			</div>
 				
 			</div>
 		</div>

		<div class="hpanel panel">
		{{--  --}}
			<div class="panel-body" style="padding-top:3px; padding-bottom:3px;">
			<div class="col-md-3 col-xs-6"><h4> {!! HTML::image('images/small/France.png') !!} French</h4></div>
			<div class="col-md-3 col-xs-6" style="margin-top:20px;">
				<span id="sparkline4"></span>
			</div>

			<div class="col-md-1 col-sm-2" style="padding-top:15px; font-size:19px;">
				<h2 class="label label-primary" >4</h2>
			</div>

			<div class="col-md-3 col-sm-2 available-img-list" style="padding-top:15px; font-size:19px;">
			{!! HTML::image('images/small/United Kingdom.png') !!}
			{!! HTML::image('images/small/Egypt.png') !!}			
			{!! HTML::image('images/small/Italy.png') !!}
			{!! HTML::image('images/small/Japan.png') !!}
			{!! HTML::image('images/small/United States.png') !!}	

			</div>

			<div class="col-md-2 col-sm-2">				
				<div class="btn-group pull-right" style="padding-top:15px;">
				<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Actions <span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li> <a href="#">Edit</a> </li>
					<li> <a href="#">Suspend</a> </li>
					<li> <a href="#">Delete</a> </li>
				</ul>
				</div>						
			</div>			
		</div>
		{{--  --}}

		{{--  --}}
			<div class="panel-body" style="padding-top:3px; padding-bottom:3px;">
			<div class="col-md-3 col-xs-6"><h4> {!! HTML::image('images/small/United States.png') !!} American English</h4></div>
			<div class="col-md-3 col-xs-6" style="margin-top:20px;">
				<span id="sparkline5"></span>
			</div>
			<div class="col-md-1 col-sm-2" style="padding-top:15px; font-size:19px;">
				<h2 class="label label-primary" >6</h2>
			</div>

			<div class="col-md-3 col-sm-2 available-img-list" style="padding-top:15px; font-size:19px;">

			{!! HTML::image('images/small/Japan.png') !!}
			{!! HTML::image('images/small/France.png') !!}	
			</div>

			<div class="col-md-2 col-sm-2">			
				
				<div class="btn-group pull-right" style="padding-top:15px;">
				<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Actions <span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li> <a href="#">Edit</a> </li>
					<li> <a href="#">Suspend</a> </li>
					<li> <a href="#">Delete</a> </li>
				</ul>
				</div>						
			</div>			
		</div>
		{{--  --}}

		
	</div>
@stop

@section('add_script')
<script>
	        $("#sparkline4").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 333, 14, 1503, 53, 32, 34, 56, 76, 5, 54, 23, 44], {
            type: 'line',
            lineColor: '#62cb31',
            fillColor: '#ffffff',
            width: 160,
        });

	        $("#sparkline5").sparkline([34, 478, 43, 335, 44, 320, 166, 220, 4234, 100, 86, 540, 73, 53, 1200, 53, 23, 65, 23, 633, 53, 42, 3432, 56, 700, 150, 540, 333, 14, 1503, 53, 32, 3463, 56, 76, 5, 54, 23, 44], {
            type: 'line',
            lineColor: '#62cb31',
            fillColor: '#ffffff',
            width: 160,
        });

</script>
@stop