<?php

namespace App\Http\Requests\Dasboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUserRequest extends FormRequest
{
    /**
     * The url that users should be redirected to if validation fails.
     *
     * @var string
     */
    protected $redirect = '/profile';
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
            '' => 'string|required',
            'email' => 'email|required|unique:users,email,'.Auth::id(),
            'image' => 'image|nullable|mimes:jpg,png',
            'des' => 'string|nullable'
        ];
    }
}
