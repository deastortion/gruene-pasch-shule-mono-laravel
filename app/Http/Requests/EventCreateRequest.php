<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventCreateRequest extends FormRequest
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
            'title' => 'required|max:155|min:5',
            'content' => 'required',
            'description' => 'required|max:255|min:15',
            'image' => 'required|image|max:256',
        ];
    }
}
