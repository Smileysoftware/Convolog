<?php namespace Convolog\Http\Controllers;

use Convolog\Http\Requests;
use Convolog\Http\Controllers\Controller;

use Request;

use Convolog\Conversation;

class ApiController extends Controller {

	public function conversation_slug()
	{
        $title = Request::only( 'title' )['title'];

        $slug = Conversation::generate_title_slug( $title );

        //Count the number of records
        $count = Conversation::where( 'slug' , $slug )->count();

        return $count;
	}


}
