<?php namespace Convolog\Http\Requests;

use Convolog\Http\Requests\Request;

class CancelAccountRequest extends Request {

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
			'password'  => 'required'
		];
	}


    public function messages()
    {
        return [
            'password.required' => 'You must enter your password to confirm'
        ];
    }

}
