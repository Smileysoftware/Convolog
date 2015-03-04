<?php namespace Convolog;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Conversation extends Model {


    public function user()
    {
        $this->belongsTo( 'Convolog\User' );
    }
    
    public function comments()
    {
        return $this->hasMany( 'Convolog\Comment' );
    }
    
    
	public static function store( $data )
	{
	    $c = new Conversation;

        $c->user_id = Auth::user()->id;

        $c->company = $data['company'];
        $c->description = $data['description'];

        $c->save();

        return $c->id;
	}


    public static function fetch_conversation( $conversation_id )
    {

        $user_id = Auth::user()->id;

        $data = Conversation::where( 'user_id' , $user_id )->where( 'id' , $conversation_id )->with('comments')->first();

        if ( count( $data ) > 0 ){

            return $data;

        }

        return false;

    }

}
