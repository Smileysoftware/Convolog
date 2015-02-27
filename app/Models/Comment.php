<?php namespace Convolog\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Comment extends Model {

    public function Conversation()
    {
        return $this->belongsTo('Convolog\Models\Conversation');
    }


}
