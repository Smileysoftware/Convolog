<?php namespace Convolog;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

    public $fillable = [
        'user_id' , 'zone' , 'note'
    ];



	public static function add( $zone , $note )
	{

        Activity::create( [ 'user_id' => \Auth::user()->id , 'zone' => $zone , 'note' => $note ]);

	}

}
