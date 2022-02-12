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
            'question.name' => 'required|string|max:100',
            'question.answer' => 'required|string|max:20000',
            'question.feedback' => 'string|max:20000',
            'question.user_id' => 'required',
            'question.company_id' => 'required',
            
        ];
    }
}
