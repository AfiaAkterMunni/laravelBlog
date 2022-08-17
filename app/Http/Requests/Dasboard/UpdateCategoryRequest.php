<?php

namespace App\Http\Requests\Dasboard;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    protected function getRedirectUrl()
    {
        return url()->previous();
    }
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
        // dd("heloo");
        return [
            'title' => 'required|string|unique:categories,name'
        ];
    }
}
