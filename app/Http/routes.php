<?php

Route::get('test', function () {
    return view('website.aplication.index');
});


/*************************************************
Web Site
 *************************************************/


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



 //Route::get('/','WebsiteController@index');
 Route::get('/', function () {
    return view('website.home.construccion');
});


 Route::get('home','WebsiteController@index');
 Route::get('about','WebsiteController@about');
 Route::get('join','WebsiteController@join');
 Route::get('go_translation','WebsiteController@go_translation');
 Route::get('text_translation','WebsiteController@text_translation');
 Route::post('text_translation','WebsiteController@text_translation_upload');

 Route::get('video_audio_translation','WebsiteController@video_audio');
 Route::get('website_translation','WebsiteController@website_translation');

 Route::post('join','WebsiteController@store');
 Route::get('contact','WebsiteController@contact');

Route::get('world-experts','WebsiteController@worldExperts'); // World Experts
Route::get('review-process','WebsiteController@reviewProcess');
Route::get('our-company','WebsiteController@ourCompany');//Permanent Support


Route::get('settings', ['middleware' => 'web', 'uses' => 'settings\SettingsController@index']);





/*************************************
    home-admin
    *************************************/

//Route::get('administration', 'HomeAdmin@index');

    Route::get('login', 'HomeAdmin@login');


require __DIR__ . '/routes/settings.php';
   

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/administration', 'HomeAdmin@index');
});



/*
*
*
*
*/
