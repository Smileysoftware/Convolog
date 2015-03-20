<?php namespace Convolog;

use Illuminate\Database\Eloquent\Model;

use Convolog\Conversation;
use Convolog\Comment;
use Convolog\User;

class Account extends Model {


    /**
     * Destroys the account totally.
     *
     * @return int|void
     */
    public static function cancel()
	{

        $user_id = \Auth::user()->id;

        $conversations = Conversation::where( 'user_id' , $user_id )->lists( 'id' );

        Conversation::where( 'user_id' , $user_id )->delete();

        Comment::whereIn( 'conversation_id' , $conversations )->delete();

        User::where( 'id' , $user_id )->delete();

	}

}
