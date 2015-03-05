<?php namespace Convolog;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Conversation extends Model {


    /**
     *
     */
    public function user()
    {
        $this->belongsTo( 'Convolog\User' );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }


    /**
     * @param $data
     * @return mixed
     */
    public static function store( $data )
	{
	    $c = new Conversation;

        $c->user_id = Auth::user()->id;

        $c->title = $data['title'];
        $c->slug = Conversation::generate_title_slug( $data['title'] );

        $c->company = $data['company'];
        $c->description = $data['description'];

        $c->save();

        return $c->id;
	}

    /**
     * @param $data
     * @return mixed|string
     */
    public static function update_conversation( $data )
    {
        $c = Conversation::findOrFail( $data['id'] )->first();

        $c->title = $data['title'];
        $c->slug = Conversation::generate_title_slug( $data['title'] );

        $c->company = $data['company'];
        $c->description = $data['description'];

        $c->save();

        return $c->slug;
    }


    /**
     * @param $title
     * @return mixed|string
     */
    public static function generate_title_slug( $title )
    {

        $slug = strtolower( $title );
        $slug = str_replace( ' ' , '-' , $slug );

        return $slug;

    }


    /**
     * @param $conversation_id
     * @return bool
     */
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
