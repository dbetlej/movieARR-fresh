<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'name' => 'required|max:120',
            'url' => 'max:500',
            'description' => 'max:1200',
            'series' => 'max:120',
            'category' => 'max:120',
            'favorite' => 'nullable|boolean',
            'watched' => 'nullable|boolean',
            'to_watch' => 'nullable|boolean',
        ];
    }
}
