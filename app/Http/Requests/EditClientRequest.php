<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditClientRequest extends FormRequest
{
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
            'contact_name' => ['required', 'string', 'max:255'],
            'contact_email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'contact_phone_number' => ['required'],
            'company_name' => ['required'],
            'company_address' => ['required'],
            'company_city' => ['required', 'string'],
            'company_zip' => ['required', 'integer'],
            'company_vat' => ['required', 'integer'],
        ];
    }
}
