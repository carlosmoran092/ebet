<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\LanguageAvailable;
use App\Translator;

class WebsiteController extends Controller
{
    public function index()
    {
    	
    	return view('website.home.index');
    }
    public function join()
    {
    	$LA=LanguageAvailable::where('active', 1)->orderBy('name', 'asc')->get();

    	return view("website.join.index")->with('LA',$LA);
    }
    public function store(Request $request)
    {
        $translator = new Translator;
        $translator->name = $request->input('name');
        $translator->last_name = $request->input('last_name');
        $translator->gender = $request->input('gender');
        $translator->birthday = $request->input('birthday');
        $translator->email = $request->input('email');
        $translator->password = $request->input('password');
        $translator->phone = $request->input('phone');
        $translator->skype = $request->input('skype');
        $translator->website = $request->input('website');
        $translator->residence_country = $request->input('home_country');

        $translator->idioms = json_encode($request->input('known_languages'));
        $translator->preferences = json_encode($request->input('preferences'));
        $translator->professional_profile = $request->input('professional_profile');
        $translator->state = 1;

        $translator->save();


    	return($request->all());
    }
    public function worldExperts(){
    	return view('website.services.world-experts');
    }
    public function reviewProcess()
    {
        return view('website.services.review-process');
    }
    public function permanentSupport()
    {
        return view('website.services.permanent-support');
    }
    public function contact()
    {
        return view('website.contacts.index');
    }
}
