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


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


/*
|--------------------------------------------------------------------------
| Authorised Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth'], function()
{

    /*
     * Conversations
     */
    Route::get( 'conversations' , [ 'as' => 'conversations' , 'uses' => 'ConversationController@index' ] );
    Route::get( 'conversations/create', [ 'uses' => 'ConversationController@create' ] );
    Route::post( 'conversations/create', 'ConversationController@store' );

    Route::post( 'conversations/edit', 'ConversationController@update' );

    Route::get( 'conversations/{id}' , [ 'uses' => 'ConversationController@show'] );


    /**
     * Routes for the API section
     */
    Route::group(['prefix' => 'api'] , function(){

        Route::post('conversation/slug' , [ 'uses' => 'ApiController@conversation_slug' ] );

    });

});