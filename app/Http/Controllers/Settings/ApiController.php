<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\LanguageAvailable;
use App\Models\Directories\CountryDirectory;
use App\Models\Directories\LanguageFamily;
use DB;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    
    public function index()
    {
    	return view('administration.settings.configuration.api');
    }

    public function getServices()
    {

    }

    public function getExperts()
    {

    }

    public function getDelivery()
    {

    }


}