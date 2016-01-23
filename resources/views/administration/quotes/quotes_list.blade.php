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
            <button class="btn btn-default btn-md">Create New</button>
        </div>
        <h2 class="font-light m-b-xs">
            Quote
        </h2>
    </div>
</div>
@endsection

@section('contend_panel')
   <div class="row">


    <div class="col-md-12 col-lg-12 hpanel panel"><br>
        <div class="hpanel hbgblue col-md-3">
            <div class="panel-body">
                <div class="text-center">
                    <p class="text-big font-light">
                        $797.00
                    </p>
                </div>
            </div>
            <div class="panel-footer">
                <a href="/quotes/82313/edit" class="btn btn-default btn-xs"><i class="icon-edit-3"></i> Edit</a>
                <a href="quotes/5h73J" class="btn btn-default btn-xs"><i class="icon-zoom-in-4"></i> Open</a>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="hpanel">
                <div class="tabs-right">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-7" aria-expanded="false"><i class="icon-info-circled-alt"></i> <span class="hidden-sm hidden-xs">Information</span></a></li>
                        <li class=""><a data-toggle="tab" href="#tab-9" aria-expanded="false"><i class="icon-language"></i> <span class="hidden-sm hidden-xs">Services</span></a></li>
                        <li class=""><a data-toggle="tab" href="#tab-8" aria-expanded="true"><i class="icon-attach-6"></i> <span class="hidden-sm hidden-xs">Documents</span></a></li>

                    </ul>
                    <div class="tab-content ">
                        <div id="tab-7" class="tab-pane active">
                            <div class="panel-body">
                                <table class="table  table-striped table-condensed">
                                    <tbody class="text-p-orders">
                                    <tr><td>Client: <span class="pull-right">Name company or Username</span></td></tr>
                                    <tr><td>Created: <span class="pull-right">{!! $date = $carbon->now()->subDays(5)->diffForHumans(); !!} </span></td></tr>
                                    <tr><td>Delivery Date: <span class="pull-right">30-11-2015 12:20 </span></td></tr>
                                    
                                    <tr><td>Status: <span class="pull-right">Awaiting Approval</span></td></tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="tab-8" class="tab-pane">
                            <div class="panel-body">
                            <table class="table-striped table">
                                <tr><td>Name_Document_2015.doc <a href="#" class="btn btn-default btn-xs pull-right"><i class="pe-7s-cloud-download"></i> Download</a></td></tr>
                                <tr><td>Name_Document_language2015.pdf <a href="#" class="btn btn-default btn-xs pull-right"><i class="pe-7s-cloud-download"></i> Download</a></td></tr>
                                <tr><td>Name_Document_language2015_1.pdf <a href="#" class="btn btn-default btn-xs pull-right"><i class="pe-7s-cloud-download"></i> Download</a></td></tr>
                            </table>
                            </div>
                        </div>
                        <div id="tab-9" class="tab-pane">
                            <div class="panel-body">
                                <table class="table table-striped table-condensed">
                                    <tbody class="text-p-orders">
                                    <tr>
                                        <td>Tipe service: <span class="pull-right">Documents translation</span></td>
                                    </tr>
                                    <tr><td>Experts: <span class="pull-right"> Medic</td></span></tr>
                                    <tr><td>Original Language: <span class="pull-right"> French</span></td></tr>
                                    <tr><td>Target Language: <span class="pull-right"> English, Japanese</span></td></tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
@endsection