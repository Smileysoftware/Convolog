<?php namespace Convolog\Http\Controllers;

use Convolog\Http\Requests;
use Convolog\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Convolog\Http\Requests\AccountRequest;
use Convolog\Http\Requests\ChangePasswordRequest;
use Convolog\User;
use Convolog\Activity;

class AccountController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('app.account.index');
	}



	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update( AccountRequest $request)
	{
		$data = $request->all();

        if ( User::update_user_details( $data ) ){

            Activity::add( 'Account' , 'User updated their account details');

            return \Redirect::back()->with( 'notice-okay' , 'Your profile was updated' );

        }

        return \Redirect::back()->with( 'notice-bad' , 'Your profile was not updated' );
	}


    /**
     * Return the change password view
     *
     * @return \Illuminate\View\View
     */
    public function change_password()
    {
        return view('app.account.change-password');
    }


    /**
     * Method to store the new password
     *
     * @param ChangePasswordRequest $request
     * @return mixed
     */
    public function update_password( ChangePasswordRequest $request)
    {

        $data = $request->all();

        //If the existing password does not match our records
        if( ! User::do_passwords_match( $data['old-password'] ) ){
            return \Redirect::back()->with( 'notice-bad' , 'Your password was incorrect');
        }

        //If the password couldnt be saved
        if ( ! User::save_new_password( $data['new-password1'] ) ) {
            return \Redirect::back()->with( 'notice-bad' , 'Your password was not updated');
        }

        Activity::add('Account' , 'User changed their password');

        return \Redirect::back()->with( 'notice-okay' , 'Your password was updated');

    }
    

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
