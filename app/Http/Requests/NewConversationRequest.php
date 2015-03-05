<?php namespace Convolog\Http\Requests;

use Convolog\Http\Requests\Request;

class NewConversationRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'title' => 'required',
			'company' => 'required',
            'description' => 'required'

		];

	}

}
