<?php namespace Convolog\Http\Controllers;

use Convolog\Http\Requests;
use Convolog\Http\Controllers\Controller;

use Illuminate\Http\Request;

/**
 * Class AppController
 * @package Convolog\Http\Controllers
 */
class AppController extends Controller {

    /**
     * Show the users dashboard page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        return redirect( '/conversations' );

    }

}
