<?php

namespace App\Http\Requests\Dasboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
{
     /**
     * The url that users should be redirected to if validation fails.
     *
     * @var string
     */
    protected $redirect = 'dashboard/blogs/create';
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
            'title' => 'string|required',
            'category' => 'required',
            'image' => 'image|nullable|mimes:jpg,png',
            'editor1' => 'string|required'
        ];
    }
}
