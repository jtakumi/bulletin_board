<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'question.questionText' => 'required|string|max:100',
            'question.answer' => 'required|string|max:20000',
            'question.feedback' => 'string|max:20000',
            'question.user_id' => 'required',
            'question.company_id' => 'required',
            
        ];
    }
}
