<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * The url that users should be redirected to if validation fails.
     *
     * @var string
     */
    protected $redirect = '/contact#cForm';

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
            'name' => 'required|string|alpha',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string'
        ];
    }
}
