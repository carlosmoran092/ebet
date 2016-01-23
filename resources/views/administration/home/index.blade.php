@extends('layouts.master')

@section('contend_panel')

<div class="row">
	<div class="col-lg-12">
		<div class="hpanel">

			<div class="panel-body">
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="small">
							<i class="fa fa-bolt"></i> Page views
						</div>
						<div>
							<h1 class="font-extra-bold m-t-xl m-b-xs">
								226,802
							</h1>
							<small>Page views in last month</small>
						</div>
						<div class="small m-t-xl">
							<i class="fa fa-clock-o"></i> Data from January
						</div>
					</div>
					<div class="col-md-6">
						<div class="text-center small">
							<i class="fa fa-laptop"></i> Active users in current month (December)
						</div>
						<div class="flot-chart" style="height: 160px">
							<div class="flot-chart-content" id="flot-line-chart"></div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="small">
							<i class="fa fa-clock-o"></i> Active duration
						</div>
						<div>
							<h1 class="font-extra-bold m-t-xl m-b-xs">
								10 Months
							</h1>
							<small>And four weeks</small>
						</div>
						<div class="small m-t-xl">
							<i class="fa fa-clock-o"></i> Last active in 12.10.2015
						</div>
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
	$(function () {

        /**
         * Flot charts data and options
         */
         var data1 = [ [0, 55], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51] ];
         var data2 = [ [0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59] ];

         var chartUsersOptions = {
         	series: {
         		splines: {
         			show: true,
         			tension: 0.4,
         			lineWidth: 1,
         			fill: 0.4
         		},
         	},
         	grid: {
         		tickColor: "#f0f0f0",
         		borderWidth: 1,
         		borderColor: 'f0f0f0',
         		color: '#6a6c6f'
         	},
         	colors: [ "#62cb31", "#efefef"],
         };

         $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);

        /**
         * Flot charts 2 data and options
         */
         var chartIncomeData = [
         {
         	label: "line",
         	data: [ [1, 50], [2, 66], [3, 44], [4, 76], [5, 32], [6, 51] ]
         }
         ];

         var chartIncomeOptions = {
         	series: {
         		lines: {
         			show: true,
         			lineWidth: 0,
         			fill: true,
         			fillColor: "#64cc34"

         		}
         	},
         	colors: ["#62cb31"],
         	grid: {
         		show: false
         	},
         	legend: {
         		show: false
         	}
         };

         $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);



     });

</script>
@stop