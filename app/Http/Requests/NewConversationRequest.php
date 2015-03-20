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
            'description' => 'required',

			'company_new' => 'required_without:company_select|unique:companies,name',
			'company_select' => 'required_without:company_new',

		];

	}

    public function messages()
    {
        return [
            'title.required' => 'Please give your conversation a title',
            'description.required' => 'Its better if your conversation has a description, you\'ll only forget what it\'s for',
            'company_select.required_without' => 'You must either select a new company or add a new one',
            'company_new.required_without' => 'You must either add a new company or select one from the list',

            'company_new.unique'    => 'The company is already set up'

        ];
    }

}
