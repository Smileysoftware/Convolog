<?php namespace Convolog\Http\Controllers;

use Convolog\Http\Requests;
use Convolog\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function home()
	{
	    return View('home');
	}

}
