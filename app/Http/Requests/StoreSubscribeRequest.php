<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubscribeRequest extends FormRequest
{
    protected function getRedirectUrl()
    {
        return url()->previous() . '#mc-form';
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
        $url = $this->redirector->getUrlGenerator();
        // $this->redirect = $url->previous() . '#mc-form';
        return [
            'email' => 'required|email|unique:subscribers,email'
        ];
    }
}
