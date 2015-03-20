<?php namespace Convolog\Http\Controllers;

use Convolog\Http\Requests;
use Convolog\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Convolog\User;
use Convolog\Company;
use Convolog\Conversation;
use Convolog\Activity;


class AdminController extends Controller {

    /**
     * Return the index view for the admin panel
     *
     * @return \Illuminate\View\View
     */
    public function index()
	{
        $users = User::all();
        $user_count = $users->count();
        $company_count = Company::all()->count();
        $conversation_count = Conversation::all()->count();

        $activity = Activity::orderBy( 'created_at' , 'desc')->get();

	    return view('admin.index' , compact( 'users' , 'user_count' , 'company_count' , 'conversation_count' , 'activity' ) );
	}

    /**
     * Return the user view
     *
     * @return \Illuminate\View\View
     */
    public function users()
    {
        $users = User::all();

        return view('admin.users' , compact( 'users' ) );
    }

    /**
     * Return the companies view
     *
     * @return \Illuminate\View\View
     */
    public function companies()
    {
        $companies = Company::all();

        return view('admin.companies' , compact( 'companies' ) );
    }
    
    public function companies_create()
    {
        return view('admin.companies_create');
    }
    public function companies_store()
    {
        $data = \Input::all();

        Company::create( $data );

        return \Redirect::back();
    }


}
