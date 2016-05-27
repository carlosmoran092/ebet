<?php


/*************************************************
Settings Options
*************************************************/

Route::group(['prefix' => 'settings', 'namespace' => 'Settings','middleware' => ['web','auth']], function()
{
    /*
    *       Lenguages Availables
    */
	Route::get('languages_available/', [
        'as'   => 'languages_available.index', 
        'uses' => 'LanguagesAvailableController@index'
        ]);

    Route::get('languages_available/add', [
        'as'   => 'languages_available.create', 
        'uses' => 'LanguagesAvailableController@create'
        ]);

    Route::post('languages_available/', [
        'as'   => 'languages_available.store', 
        'uses' => 'LanguagesAvailableController@store'
        ]);

    Route::get('languages_available/{id}/edit', [
        'as'   => 'languages_available.edit', 
        'uses' => 'LanguagesAvailableController@edit'
        ]);

    Route::post('languages_available/{id}', [
        'as'   => 'languages_available.update', 
        'uses' => 'LanguagesAvailableController@update'
        ]);
    Route::post('languages_available/{id}/update_target', [
        'as'   => 'languages_available.updateTargetLanguages', 
        'uses' => 'LanguagesAvailableController@updateTargetLanguages'
        ]);
    Route::get('languages_available/{id}/get_target', [
        'as'   => 'languages_available.getTarget', 
        'uses' => 'LanguagesAvailableController@getTarget'
        ]);
/*************************************
    Rates
    *************************************/
        Route::get('rates_language/{id}/edit', [
        'as'   => 'rates_language.edit', 
        'uses' => 'RateLanguageController@edit'
        ]);

     Route::get('rates_language/', [
        'as'   => 'rates_language.index', 
        'uses' => 'RateLanguageController@index'
        ]);

     Route::get('rates_language/getalllanguages', [
        'as'   => 'rates_language.index', 
        'uses' => 'RateLanguageController@getAllLanguages'
        ]);

     Route::put('rates_language/{id}', [
        'as'   => 'rate_language.update', 
        'uses' => 'RateLanguageController@update'
        ]);


    /********************************************/
  //  Configuration API
    /*******************************************/

       Route::get('api/', [
        'as'   => 'serttings_api', 
        'uses' => 'ApiController@index'
        ]);

     /*
      * Get Service Document [API]
      */
     Route::get('api/get_services_documents',[
        'as' => 'get_services_documents',
        'uses' => 'ApiController@getServices'
        ]);

       // DOCUMENTS
            //LOAD
                //PRINT

     Route::get('api/print_services',[
        'as' => 'print_services',
        'uses' => 'ApiController@PrintServicesDocuments'
        ]);

     Route::get('api/print_experts',[
        'as' => 'print_experts',
        'uses' => 'ApiController@PrintExpertsDocuments'
        ]);

     Route::get('api/print_deliveries',[
        'as' => 'print_deliveries',
        'uses' => 'ApiController@PrintDeliveriesDocuments'
        ]);


            //STORE

     Route::post('api/store_service',[
        'as' => 'store_service',
        'uses' => 'ApiController@storeService'
        ]);

     Route::post('api/store_expert',[
        'as' => 'store_expert',
        'uses' => 'ApiController@storeExpert'
        ]);  

     Route::post('api/store_delivery',[
        'as' => 'store_delivery',
        'uses' => 'ApiController@storeDelivery'
        ]);  
            //DELETE

     Route::get('api/delete_service/{id}',[
        'as' => 'delete_service',
        'uses' => 'ApiController@deleteService'
        ]);

     Route::get('api/delete_expert/{id}',[
        'as' => 'delete_expert',
        'uses' => 'ApiController@deleteExpert'
        ]);  
     Route::get('api/delete_delivery/{id}',[
        'as' => 'delete_delivery',
        'uses' => 'ApiController@deleteDelivery'
        ]);
            //EDIT 
     Route::put('api/update_service',[
        'as' => 'update_service',
        'uses' => 'ApiController@UpdateService'
        ]);  
     Route::put('api/update_service',[
        'as' => 'update_service',
        'uses' => 'ApiController@UpdateService'
        ]); 
 })

?>