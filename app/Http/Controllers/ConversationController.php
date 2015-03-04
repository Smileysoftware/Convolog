<?php namespace Convolog\Http\Controllers;

use Convolog\Http\Requests;
use Convolog\Http\Requests\NewConversationRequest;
use Convolog\Http\Controllers\Controller;

use Request;
use Redirect;

use Convolog\Models\Conversation as Conversation;

class ConversationController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //Fetch all the users conversations
        $user = \Auth::user();

        $conversations = $user->conversations()->orderby( 'updated_at' , 'desc' )->get();

		return view( 'app.conversation.conversations' , compact( 'conversations' ) );
	}

	/**
	 * Show the form for creating a new conversation.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('app.conversation.create');
	}

	/**
	 * Store a newly created conversation in the database.
	 *
	 * @return Response
	 */
	public function store( NewConversationRequest $request )
	{
        $data = Request::all();

        if ( $conversation_id = Conversation::store( $data ) ){

            return Redirect::to( '/conversation/' . $conversation_id );

        }

        return Redirect::back()->withErrors('The Conversation could not be created');
	}

	/**
	 * Display the specified conversation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $user = \Auth::user();

		if ( ! $data = $user->conversations()->with('comments')->find( $id ) ) {

            return Redirect::route( 'conversations' );

        }

//        return $data;

        return view( 'app.conversation.show')->with( 'conversation' , $data );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
