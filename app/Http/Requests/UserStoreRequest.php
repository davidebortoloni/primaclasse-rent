<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => 'required|string|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,id',
            'nationality' => 'required|string|in:ITA,GER,FRA,SPA,USA'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => __('words.name'),
            'nationality' => __('words.nationality'),
            'roles' => trans_choice('words.role', 2),
        ];
    }
}
