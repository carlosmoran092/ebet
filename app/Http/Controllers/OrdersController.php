<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function index()
    {
    	return view('administration.orders.orders_list');
    }

    public function show($id)
	{
		//
		$carbon = new \Carbon\Carbon();
		return view('administration.orders.orders_show',array('id'=>$id,'carbon'=>$carbon));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return ('Hola');
	}
}
