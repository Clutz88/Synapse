<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => ['required'],
            'content' => ['required'],
            'excerpt' => ['required'],
            'created_by' => ['required', 'exists:users'],
            'slug' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
