<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\LanguageAvailable;
use App\Models\Directories\CountryDirectory;
use App\Models\Directories\LanguageFamily;

use Validator;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class LanguagesAvailableController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    	
    	return view('administration.settings.languages_available.index');
    	
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {  
         $LA = LanguageAvailable::where('active', 1)
         ->orderBy('name', 'asc')               
         ->get();
        //Country Directory
         $CD = CountryDirectory::all() ;
        //Country Directory
         $LF = LanguageFamily::all();  
         return view('administration.settings.languages_available.create',
            ['LA' => $LA,
            'CD' => $CD,
            'LF' => $LF
            ]);
     }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $LA = new LanguageAvailable;
        $LA->name = $request->input('name');
        $LA->title = $request->input('title');      
        $LA->patch_image = $request->input('patch_image');
        $LA->iso_code = $request->input('iso_code');        
        $LA->language_family = $request->input('family');
                //$tl = $request->input('target_languages');        
        $target_languages = $request->input('target_languages');
        $target_languages= json_encode($target_languages);
        $LA->target_languages = $target_languages;
        $LA->active='0';

        $LA->save();

        // Languages Available
        $LA   = LanguageAvailable::where('active', 1)
        ->orderBy('name', 'asc')               
        ->get();
        $lang = LanguageAvailable::find($id);
        //Country Directory
        $CD = CountryDirectory::all() ;  
        //Country Directory
        $LF = LanguageFamily::all();  
        
        $targets= $lang->target_languages;
        $targets = json_decode($targets);  
        return view('administration.settings.languages_available.edit',
            [
            'lang'    =>$lang,
            'LA'      =>$LA,
            'CD'      =>$CD,  //Country Directory
            'LF'      =>$LF,  //Language Family Directory
            'targets' =>$targets
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        // Languages Available
        $LA   = LanguageAvailable::where('active', 1)
        ->orderBy('name', 'asc')               
        ->get();
        $lang = LanguageAvailable::find($id);
        //Country Directory
        $CD = CountryDirectory::all() ;  
        //Country Directory
        $LF = LanguageFamily::all();  
        
        $targets= $lang->target_languages;
        $targets = json_decode($targets);  
        return view('administration.settings.languages_available.edit',
            [
            'lang'    =>$lang,
            'LA'      =>$LA,
            'CD'      =>$CD,  //Country Directory
            'LF'      =>$LF,  //Language Family Directory
            'targets' =>$targets
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $LA = LanguageAvailable::find($id);
        $LA->name = $request->input('name');
        $LA->title = $request->input('title');      
        $LA->patch_image = $request->input('patch_image');
        $LA->iso_code = $request->input('iso_code');        
        $LA->language_family = $request->input('family');
                //$tl = $request->input('target_languages');        
        $target_languages = $request->input('target_languages');
        $target_languages= json_encode($target_languages);
        $LA->target_languages = $target_languages;
        $LA->active=$request->input('state');;

        $LA->save();       

        $tt=json_decode($target_languages);
        
        return $tt;
        
        




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}



