<?php namespace Convolog\Http\Requests;

use Convolog\Http\Requests\Request;

class AccountRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
        return \Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name'      => 'required',
            'email'     => 'required|email'
		];
	}


    public function messages()
    {
        return [
            'name.required'     =>  'You must enter something for your name',
            'email.required'    =>  'You must enter an email address',
            'email.email'       =>  'You email address must be an actual email address'
        ];
    }

}
