@extends('layouts.master')

@section('head_panel')
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
            <button class="btn btn-default btn-md">Add New</button>
        </div>
        <h2 class="font-light m-b-xs">
            Work Team
        </h2>
    </div>
</div>
    @stop


@section('contend_panel')
<div class="col-lg-12" style="">
    <div class="hpanel">
        <div class="panel-heading hbuilt">
            <div class="row">

                <div class="col-md-6" style="">
                    
                        <div class="input-group">
                            <input type="text" class="form-control input-md" placeholder="Search..." name="">
								<span class="input-group-btn">
									<button class="btn btn-md btn-default" >
                                        <span class="fa fa-search"></span>
                                    </button>
								</span>
                        </div>
                    
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="panel hpanel col-md-4 col-sm-6">
                <div class="panel-body">
                     <span class="col-sm-5">
                        {!! HTML::image('images/a2.jpg', 'profile', ['class'=>'img-circle img-responsive','width'=>'56']) !!}
                    </span>
                    <span class="col-sm-7">
                        <h4 class="pull-right">Frederik Reust</h4>
                        <span class="label label-info pull-right col-md-12 col-sm-12 col-xs-12">Translator</span>
                    </span>
                    <div class="col-md-12 pull-right">
                     {!! HTML::image('images/small/Spain.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25']) !!}
                    {!! HTML::image('images/small/Germany.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25','data-toggle'=>'tooltip','data-placement'=>'bottom','data-original-title'=>'German']) !!}
                    </div>
                </div>


            </div>
            <!-- -->

            <div class="panel hpanel col-md-4 col-sm-6 ">
                <div class="panel-body">
                     <span class="col-sm-5 col-xs-4">
                        {!! HTML::image('images/a5.jpg', 'profile', ['class'=>'img-circle img-responsive','width'=>'56']) !!}
                    </span>
                    <span class="col-sm-7 col-xs-8">
                        <h4 class="pull-right">Laddi Santie</h4>
                        <span class="label label-info pull-right col-md-12 col-sm-12 col-xs-12">Translator</span>
                    </span>
                     <div class="col-md-12">
                    {!! HTML::image('images/small/France.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25']) !!}
                    {!! HTML::image('images/small/South Korea.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25']) !!}
                    {!! HTML::image('images/small/Japan.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25']) !!}
                     </div>
                </div>
            </div>

            <!-- -->

            <div class="panel hpanel col-md-4 col-sm-6">
                <div class="panel-body">
                     <span class="col-sm-5 col-xs-4">
                        {!! HTML::image('images/a3.jpg', 'profile', ['class'=>'img-circle img-responsive','width'=>'56']) !!}
                    </span>
                    <div class="col-sm-7 col-xs-8">
                        <h4 class="pull-right">Vladímir Kush</h4>
                        <span class="label label-info pull-right col-md-12 col-sm-12 col-xs-12">Translator</span>
                    </div>
                    <div class="col-md-12 pull-right">
                    {!! HTML::image('images/small/Russia.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25']) !!}
                    {!! HTML::image('images/small/United States.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25']) !!}
                    {!! HTML::image('images/small/Hungary.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25']) !!}
                    </div>
                </div>
        </div>

            <!-- -->

            <div class="panel hpanel col-md-4 col-sm-6">
                <div class="panel-body">
                     <span class="col-sm-5 col-xs-4 center-block">
                        {!! HTML::image('images/a8.jpg', 'profile', ['class'=>'img-circle img-responsive','width'=>'56']) !!}
                    </span>
                    <span class="col-sm-7 col-xs-8">
                        <h4 class="pull-right">Jerry Heem</h4>
                        <span class="label label-default pull-right col-md-12 col-sm-12 col-xs-12">Translator</span>
                    </span>
                <div class="col-md-12">
                    {!! HTML::image('images/small/Romania.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25']) !!}
                    {!! HTML::image('images/small/United States.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25']) !!}
                    {!! HTML::image('images/small/Hungary.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25']) !!}
                </div>
                </div>


            </div>

            <!-- -->

            <div class="panel hpanel col-md-4 col-sm-6">
                <div class="panel-body">
                     <span class="col-sm-5 col-xs-4 center-block">
                        {!! HTML::image('images/a1.jpg', 'profile', ['class'=>'img-circle img-responsive','width'=>'56']) !!}
                    </span>
                    <span class="col-sm-7 col-xs-8">
                        <h4 class="pull-right">Michael Klarnen</h4>
                        <span class="label label-success pull-right col-md-12 col-sm-12 col-xs-12">Proofreader</span>
                    </span>
                    <div class="col-md-12">
                    {!! HTML::image('images/small/United States.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25']) !!}
                    {!! HTML::image('images/small/Hungary.png', 'profile', ['class'=>'img-circle workteam-lang','width'=>'25']) !!}
                </div>
                </div>


            </div>
    </div>
</div>
@stop

@section('add_script')
<script>	

	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

@stop