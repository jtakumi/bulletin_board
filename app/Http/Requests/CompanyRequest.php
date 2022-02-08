<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    public function rules()
    {
        return [
            'Company.name' => 'required|string|max:100',
            'Company.address' => 'required|string|max:200',
            'Company.industry_id' => 'required',
            'Company.occupation_id' => 'required',
        ];
    }
}
