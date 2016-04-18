<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\LanguageAvailable;

//API
use App\Models\Api\Experts;
use App\Models\Api\Services;
use App\Models\Api\Deliveries;

use DB;
use Session;
use Validator;
use Redirect;

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

    	$services = Services::all(); 
    	$experts = Experts::all();	
    	$deliveries = Deliveries::all();
    	return view('administration.settings.configuration.api',['services'=>$services,'experts'=>$experts,'deliveries'=>$deliveries]);
    }


// GET //
    public function getServices()
    {
    	$services = Services::all();
    	return $services;
    }

    public function getExperts()
    {
    	$experts = App\Models\Api\Experts::all();
    	return $experts;
    }

    public function getDeliveries()
    {
    	$deliveries = App\Models\Api\Deliveries::all();
    	return $deliveries;
    }
// END GET //



// STORE SERVICE //
    public function storteService(Request $request)
    {
      if($request->ajax()) {  
         $new_service = new Services;
         $new_service->title = $request->input('title');
         $new_service->rates = $request->input('rates');
         $new_service->save();   
         return "Guardado";  
     }else{ return "Algo va mal";}
 }

 public function storteExpert(Request $data)
 {
   $services   = new Services;
   $experts    = new Experts;
   $deliveries = new Deliveries;

   $expert->title = $data->input('title');
   $expert->rates = $data->input('rates');

   $expert->save();

   return view('administration.settings.configuration.api',['services'=>$services,'experts'=>$experts,'deliveries'=>$deliveries]);
}

public function storteDelivery(Request $data)
{
   $services   = new Services;
   $experts    = new Experts;
   $deliveries = new Deliveries;
   $delivery->title = $data->input('title');
   $delivery->rates = $data->input('rates');
   $delivery->save();

   return view('administration.settings.configuration.api',['services'=>$services,'experts'=>$experts,'deliveries'=>$deliveries]);
}


public function get_services_documents(){
  $services = App\Models\Api\Services::all();
  return $services;
}

// UPDATE //

public function UpdateService(Request $request, $id){
   $service = Services::find($id);
}


// DELETE //

public function deleteService($id){
    $id = $id;
    DB::table('services')->where('id', '=', $id)->delete();
    return "Delete OK";
}


}