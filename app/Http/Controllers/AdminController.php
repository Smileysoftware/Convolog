<?php namespace Convolog\Http\Controllers;

use Convolog\Http\Requests;
use Convolog\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Convolog\User;
use Convolog\Company;
use Convolog\Conversation;

class AdminController extends Controller {

	public function index()
	{
        $users = User::all()->count();
        $companies = Company::all()->count();
        $conversations = Conversation::all()->count();

	    return view('admin.index' , compact( 'users' , 'companies' , 'conversations' ) );
	}
    public function users()
    {
        $users = User::all();

        return view('admin.users' , compact( 'users' ) );
    }

    public function companies()
    {
        $companies = Company::all();

        return view('admin.companies' , compact( 'companies' ) );
    }

}
