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
      $LA = LanguageAvailable::all();
      return view('administration.settings.configuration.api',['LA'=>$LA,'services'=>$services,'experts'=>$experts,'deliveries'=>$deliveries]);
    }


/*
*
* GET - Print [Services,Experts,Deliveries]
*
*/
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

/*
*
* Save [Services,Experts,Deliveries]
*
*/

// STORE SERVICE //
    public function storeService(Request $request)
    {
      if($request->ajax()) {  
       $new_service = new Services;
       $new_service->title = $request->input('title');
       $new_service->rates = $request->input('rates');
       $new_service->save();   
       return "Guardado";  
     }else{ return "Algo va mal";}
   }
// STORE EXPERT //
   public function storeExpert(Request $request)
   {
      if($request->ajax()) {  
       $new_expert = new Experts;
       $new_expert->title = $request->input('title');
       $new_expert->rates = $request->input('rates');
       $new_expert->save();   
       return "Guardado";  
     }else{ return "Algo va mal";}
   }
// STORE DELIBERY //
   public function storeDelivery(Request $request)
    {
      if($request->ajax()) {  
       $new_delivery = new Deliveries;
       $new_delivery->title = $request->input('title');
       $new_delivery->rates = $request->input('rates');
       $new_delivery->save();   
       return "Guardado";  
     }else{ return "Algo va mal";}
   }

/*
*
* Print Services - Experts - Deliveries
*
*/


public function PrintServicesDocuments()
{
  $print = Services::all();
  return view('administration.settings.configuration.partials.services',['print'=>$print]);
}

public function PrintExpertsDocuments()
{
  $print = Experts::all();
  return view('administration.settings.configuration.partials.experts',['print'=>$print]);
}

public function PrintDeliveriesDocuments()
{
  $print = Deliveries::all();
  return view('administration.settings.configuration.partials.delivery',['print'=>$print]);
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