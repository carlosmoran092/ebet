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

        $LA = LanguageAvailable::where('active', 1)
        ->orderBy('name', 'asc');
        
        LanguageAvailable::find($id);
        $lang = LanguageAvailable::find($id);
        return view('administration.settings.rates.edit',['lang'=>$lang,'LA'=>$LA]);
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        //
    }

    public function getAllLanguages()
    {
        $LA = DB::table('language_availables')->select('id','name','title','patch_image')->orderBy('name', 'asc')->get();
        return $LA;
    }
}