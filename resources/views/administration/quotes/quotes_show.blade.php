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
            Quotation
        </h2>
    </div>
</div>
@endsection

@section('contend_panel')
    <div class="row">

    <br>
    <div class="col-md-12">
        <div class="panel hpanel">


            <div class="panel-body">
                <div class="col-md-12 border-bottom">
                    <h3 class="text-right">Quotation - 341954</h3>
                </div><hr>
<br>
                <div class="col-md-6 text-left">
                    <address>
                        <span>
                            <h5 class="text-quote">TRADOKEY</h5>
                        </span>
                        30 Mortensen Avenue<br>
                        Salinas, CA 93905<br>
                        P: (831) 758-7200
                    </address>
                </div>

                <div class="col-md-6 text-right">
                    <b>To:</b><br>
                    Corporate, Inc.<br>
                    60 Mortensen Avenue<br>
                    Salinas, CA 123343<br>
                    P: (831) 752-7000<br>

                </div>


                <div class="col-md-12"><br><br><br>
                    <table class="table-striped table">
                        <thead>
                        <th width="50%">Service</th>
                        <th>Expert</th>
                        <th>Words</th>
                        <th>Unit Price</th>
                        <th>%Tax</th>
                        <th>Total Price</th>
                        </thead>

                        <tbody>

                        <tr><td>Text translation: {!! "English"." to "."Spanish" !!}</td>
                        <td>{!!"Medic"!!}</td><td>{!! $a=4750 !!}</td><td>{!!$b=0.075!!}</td><td>
                        {!!$c=10.5!!}%</td><td>{!!  (($z=$a*$b)*$c/100)+$z !!}</td> </tr>
                        <tr><td>Text translation: {!! "English"." to "."Japanese" !!}</td><td>
                        Medic</td><td>3400</td><td>0.085</td><td>10.5%</td><td>0</td> </tr>

                        </tbody>

                    </table>
                </div>


<div class="col-md-12">
       <div class="col-md-3 pull-right"><br>
        <table class="table table-striped">
            <tr><td><b>Subtotal:</b></td><td class="text-right">400.00</td></tr>
            <tr><td><b>Taxes:</b></td><td class="text-right">35.00</td></tr>
            <tr><td><b>Total:</b></td><td class="text-right">435.00</td></tr>
        </table>
    </div>
    <div class="col-md-5 pull-left note-quotation "><p class="panel-body">The number of days to enforce this order is 5 once confirmed.</p></div>
</div>




            </div>
        </div>
    </div>

</div>
@endsection