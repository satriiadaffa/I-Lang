<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class upload extends FormRequest
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
            'image' => 'required',
            'event_title' => 'required|min:3|max:50',
            'organizer' => 'required|min:3|max:25',
            'event_date' => 'required',
            'event_time' => 'required',
            'phone' => 'required|min:8|max:13',
            'image' => 'required|email'
            
        ];
    }
}
