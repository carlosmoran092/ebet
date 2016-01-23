<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\LanguageAvailable;
use App\Models\Directories\CountryDirectory;
use App\Models\Directories\LanguageFamily;

use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class RateLanguageController extends Controller
{

    public function index()
    {    	
    	return 'rate Index';    	
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {  
        
    	LanguageAvailable::find($id);
    	$lang = LanguageAvailable::find($id);
    	return view('administration.settings.rates.edit',['lang'=>$lang]);
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        //
    }
}