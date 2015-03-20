<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
  return 'Nothing to see here for a while';
});

Route::get('home', 'PagesController@home');

/*
 * Contact routes
 */
Route::get('contact', 'PagesController@contact');
Route::post('contact', 'PagesController@contact_method');

/*
 * Advertisers routes
 */
Route::get('advertisers' , 'PagesController@advertisers');
Route::post('advertisers' , 'PagesController@advertisers_method');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('bum', function(){

    return \Auth::user();
});


/*
|--------------------------------------------------------------------------
| Authorised Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth' ], function()
{

    /*
     * Conversations
     */
    Route::get( 'conversations' , [ 'as' => 'conversations' , 'uses' => 'ConversationController@index' ] );
    Route::get( 'conversations/create', [ 'uses' => 'ConversationController@create' ] );
    Route::post( 'conversations/create', 'ConversationController@store' );

    Route::post( 'conversations/edit', 'ConversationController@update' );

    Route::get( 'conversations/{slug}' , [ 'uses' => 'ConversationController@show'] );
    Route::post( 'conversations/{slug}' , [ 'uses' => 'ConversationController@add_comment'] );

    Route::get('account' , [ 'uses' => 'AccountController@index' ] );
    Route::post('account/update' , [ 'uses' => 'AccountController@update' ] );

    Route::get('account/change-password' , [ 'uses' => 'AccountController@change_password' ] );
    Route::post('account/change-password' , [ 'uses' => 'AccountController@update_password' ] );

    /**
     * Routes for the API section
     */
    Route::group(['prefix' => 'api'] , function(){

        Route::post('conversation/slug' , [ 'uses' => 'ApiController@conversation_slug' ] );

    });

});

Route::group(['middleware' => [ 'admin' , 'devmode' ] , 'prefix' => 'admin'], function()
{

    Route::get('/', [ 'uses' => 'AdminController@index'] );

    Route::get('users', [ 'uses' => 'AdminController@users'] );
    Route::get('companies', [ 'uses' => 'AdminController@companies'] );
    Route::get('companies/create', [ 'uses' => 'AdminController@companies_create'] );
    Route::post('companies/create', [ 'uses' => 'AdminController@companies_store'] );

});