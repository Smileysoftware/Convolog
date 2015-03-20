<?php namespace Convolog\Http\Requests;

use Convolog\Http\Requests\Request;
use Auth;

class ChangePasswordRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'old-password'      => 'required',
            'new-password1'     => 'required|min:8',
            'new-password2'     => 'required|same:new-password1'
		];
	}

    public function messages()
    {
        return [
            'old-password.required'     =>  'You must enter your old password',
            'new-password1.required'    =>  'You must choose a new password',
            'new-password1.min'         =>  'Your password must be at least 8 characters',
            'new-password2.required'    =>  'Please confirm your password',
            'new-password2.same'        =>  'Passwords must match'
        ];
    }

}
