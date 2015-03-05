<?php namespace Convolog;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Comment extends Model {

    /**
     * @var array
     */
    protected $fillable = [ 'person' , 'comment_type' , 'comment' ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conversations()
    {
        return $this->belongsTo('Convolog\Conversation');
    }


    /**
     * @param $conversation
     * @param $data
     */
    public static function add_comment( $conversation , $data )
    {

        $c = new Comment;

        $c->conversation_id = $conversation->id;

        $c->person = $data['person'];
        $c->comment_type = $data['comment_type'];
        $c->comment = $data['comment'];

        $c->save();


    }


}
