<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
 
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'questions.industry' => 'required',
            'questions.occupation' => 'required',
            'questions.company' => 'required|string|max:100',
            'questions.title' => 'required|string|max:100',
            'questions.body' => 'required|string|max:20000',
            'questions.feedback' => 'string|max:20000',
        ];
    }
}
