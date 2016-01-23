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
            <button class="btn btn-default btn-sm">Create New</button>
        </div>
        <h2 class="font-light m-b-xs">
            Orders
        </h2>
    </div>
</div>
@stop

@section('contend_panel')
	<div class="row projects">
    <div class="col-lg-12">
        <div class="hpanel ">
            <div class="panel-body">
                <span class="pull-right"><i class="label label-success"> PROGRESS </i></span>
                <div class="row">
                    <div class="col-sm-8">
                        <h4><a href="#"> Manual translation service</a></h4>

                        <p class="text-p-orders">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has..
                        </p>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="project-label">CLIENT</div>
                                <small class="text-p-orders">Hendrix Corp</small>
                            </div>
                            <div class="col-sm-3">
                                <div class="project-label">DELIVERY DATE</div>
                                <small class="text-p-orders">24-11-2015 08:00:00</small>
                            </div>

                            <div class="col-sm-3">
                                <div class="project-label">PROGRESS</div>
                                <div class="progress m-t-xs full progress-small">
                                    <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="12" role="progressbar" class=" progress-bar progress-bar-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 project-info">
                        <div class="project-action m-t-md">
               
                        </div>
                        <div class="project-value">
                            <h2 class="text-success">
                                $450,40
                            </h2>
                        </div>
                        <div class="project-people">
                            <img alt="logo" class="img-circle" src="images/a1.jpg">
                            <img alt="logo" class="img-circle" src="images/a2.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="hpanel ">
            <div class="panel-body">
                <span class="pull-right"><i class="label label-success"> PROGRESS </i></span>
                <div class="row">
                    <div class="col-sm-8">
                        <h4><a href="#"> Manual translation service</a></h4>

                        <p class="text-p-orders">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has..
                        </p>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="project-label">CLIENT</div>
                                <small class="text-p-orders">Hendrix Corp</small>
                            </div>
                            <div class="col-sm-3">
                                <div class="project-label">DELIVERY DATE</div>
                                <small class="text-p-orders">24-11-2015 08:00:00</small>
                            </div>

                            <div class="col-sm-3">
                                <div class="project-label">PROGRESS</div>
                                <div class="progress m-t-xs full progress-small">
                                    <div style="width: 35%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="12" role="progressbar" class=" progress-bar progress-bar-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 project-info">
                        <div class="project-action m-t-md">
                    
                        </div>
                        <div class="project-value">
                            <h2 class="text-success">
                                $1 206,40
                            </h2>
                        </div>
                        <div class="project-people">
                            <img alt="logo" class="img-circle" src="images/a1.jpg">
                            <img alt="logo" class="img-circle" src="images/a2.jpg">
                            <img alt="logo" class="img-circle" src="images/a3.jpg">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





</div>
@stop