<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeAdmin extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    function index()
    {
    	return view('administration.home.index');
    }


    

    function login()
    {
        return view('login.index');
    }

}
