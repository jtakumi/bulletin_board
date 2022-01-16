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
            'question.industry' => 'required|string|max:100',
            'question.occupation' => 'required',
            'question.company' => 'required',
            'question.title' => 'required|string|max:100',
            'question.body' => 'required|string|max:20000',
            'question.feedback' => 'max:20000',
        ];
    }
}
