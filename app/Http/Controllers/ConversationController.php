<?php namespace Convolog\Http\Controllers;

use Convolog\Http\Requests;
use Convolog\Http\Requests\NewConversationRequest;
use Convolog\Http\Controllers\Controller;

use Request;
use Redirect;

use Convolog\Conversation;
use Convolog\Comment;
use Convolog\Company;

use Config;


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
        //Fetch a list of all companies
        $companies = Company::fetch_all_in_a_list();

		return view('app.conversation.create' , compact( 'companies' ));
	}


    /**
     * @param NewConversationRequest $request
     * @return mixed
     */
    public function store( NewConversationRequest $request )
	{
        $data = Request::all();

        //Something clever here to sort out the company ID
        $data['company_id'] = Company::create_new_or_user_existing( $data );

        if ( $conversation_id = Conversation::store( $data ) ){

            return Redirect::to( '/conversations/' . $conversation_id );

        }

        return Redirect::back()->withErrors('The Conversation could not be created');
	}


    /**
     * @param $slug
     * @return $this
     */
    public function show( $slug )
	{
        $user = \Auth::user();

        $comment_types = Config::get('convolog.comment_types');

		if ( ! $data = Conversation::fetch_conversation( $slug ) ) {

            return Redirect::route( 'conversations' );

        }

        return view( 'app.conversation.show')
            ->with( 'conversation' , $data )
            ->with( 'comment_types' , $comment_types );
	}


    /**
     * @param $slug
     * @return mixed
     */
    public function add_comment( $slug )
	{

        $user = \Auth::user();

        $data = Request::except( '_token' );

        $conversation = $user->conversations()->with('comments')->where( 'slug' , $slug )->first();

        Comment::add_comment( $conversation , $data );

        return Redirect::back()->with( 'notice-okay' , 'Comment added' );


	}


    /**
     * @return mixed
     */
    public function update()
	{
        $user = \Auth::user();

        $data = Request::all();

        if ( $slug = Conversation::update_conversation( $data ) ){

            return Redirect::to( '/conversations/'. $slug )->with( 'notice-okay' , 'Conversation was updated' );

        }

        return Redirect::back()->with( 'notice-bad' , 'Could not edit the conversation' );
	}
 

}
