<?php namespace Convolog;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Comment extends Model {

    public function conversations()
    {
        return $this->belongsTo('Convolog\Conversation');
    }


}
