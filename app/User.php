<?php namespace Convolog;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

    public function conversations(){

        return $this->hasMany( '\Convolog\Conversation' );
    }


	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


    /**
     * Method to update the users details
     *
     */
    public static function update_user_details( $data )
    {
        //Find the user then update them
        $id = \Auth::user()->id;

        $user = User::find( $id );

        $user->update( $data );

        return $user;
    }


    /**
     * Method to check that the password entered matches the one stored
     */
    public static function do_passwords_match( $new_password )
    {

        $user_id = \Auth::user()->id;

        $existing_password = User::find( $user_id )->pluck('password');

        if ( \Hash::check( $new_password , $existing_password ) ){
            return true;
        }

        return false;

    }


    /**
     * Method to store the users new passowrd
     */
    public static function save_new_password( $password )
    {
        //Find my user
        $user_id = \Auth::user()->id;

        $user = User::find( $user_id )->first();

        //Hash their password
        $user->password = \Hash::make( $password );

        if( ! $user->save() ){
            return false;
        }

        return true;

    }


}
