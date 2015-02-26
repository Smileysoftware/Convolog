<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/**
 * Class AppController
 * @package App\Http\Controllers
 */
class AppController extends Controller {

    /**
     * Show the users dashboard page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        return view( 'app.dashboard' );

    }

}
