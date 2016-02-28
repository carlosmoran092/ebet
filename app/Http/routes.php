<?php

Route::get('test', function () {
    return view('test');
});



Route::resource('customers', 'CustomersController');

Route::resource('quotes', 'QuotesController');

Route::resource('orders', 'OrdersController');

Route::resource('invoices', 'InvoicesController');

Route::resource('profile', 'ProfileController');

Route::resource('profile', 'ProfileController');

//Route::resource('workteam', 'WorkteamController');


Route::group(['prefix' => 'workteam','middleware' => 'web'], function()
{
    Route::auth();

    Route::get('/', [
        'as'   => 'workteam.index', 
        'uses' => 'WorkteamController@index'
        ]);

});



/*************************************************
 Web Site
 *************************************************/



 Route::get('/','WebsiteController@index');
 Route::get('home','WebsiteController@index');
 Route::get('about','WebsiteController@about');
 Route::get('join','WebsiteController@join');
 Route::get('go_translation','WebsiteController@go_translation');
 Route::post('join','WebsiteController@store');
 Route::get('contact','WebsiteController@contact');

Route::get('world-experts','WebsiteController@worldExperts'); // World Experts
Route::get('review-process','WebsiteController@reviewProcess');
Route::get('our-company','WebsiteController@ourCompany');//Permanent Support


Route::get('settings', ['middleware' => 'web', 'uses' => 'settings\SettingsController@index']);


/*************************************************
Settings Options
*************************************************/


Route::group(['prefix' => 'settings/languages_available', 'namespace' => 'Settings'], function()
{


	Route::get('/', [
        'as'   => 'languages_available.index', 
        'uses' => 'LanguagesAvailableController@index'
        ]);

    Route::get('/add', [
        'as'   => 'languages_available.create', 
        'uses' => 'LanguagesAvailableController@create'
        ]);

    Route::post('/', [
        'as'   => 'languages_available.store', 
        'uses' => 'LanguagesAvailableController@store'
        ]);

    Route::get('{id}/edit', [
        'as'   => 'languages_available.edit', 
        'uses' => 'LanguagesAvailableController@edit'
        ]);

    Route::put('{id}', [
        'as'   => 'languages_available.update', 
        'uses' => 'LanguagesAvailableController@update'
        ]);
    Route::post('{id}/update_target', [
        'as'   => 'languages_available.updateTargetLanguages', 
        'uses' => 'LanguagesAvailableController@updateTargetLanguages'
        ]);
    Route::get('{id}/get_target', [
        'as'   => 'languages_available.getTarget', 
        'uses' => 'LanguagesAvailableController@getTarget'
        ]);

});


/*************************************
    home-admin
    *************************************/

//Route::get('administration', 'HomeAdmin@index');

    Route::get('login', 'HomeAdmin@login');

/*************************************
    Rates
    *************************************/

    Route::group(['prefix' => 'settings/rates_language', 'namespace' => 'Settings'], function()
    {


       Route::get('{id}/edit', [
        'as'   => 'rates_language.edit', 
        'uses' => 'RateLanguageController@edit'
        ]);

       Route::get('/', [
        'as'   => 'rates_language.index', 
        'uses' => 'RateLanguageController@index'
        ]);

       Route::get('/getalllanguages', [
        'as'   => 'rates_language.index', 
        'uses' => 'RateLanguageController@getAllLanguages'
        ]);

       Route::put('{id}', [
        'as'   => 'rate_language.update', 
        'uses' => 'RateLanguageController@update'
        ]);

   });

    Route::group(['middleware' => 'web'], function () {
        Route::auth();

        Route::get('/administration', 'HomeAdmin@index');
    });
