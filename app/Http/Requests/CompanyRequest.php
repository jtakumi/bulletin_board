<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    public function rules()
    {
        return [
            'company.name' => 'required|string|max:100',
            'company.address' => 'required|string|max:200',
            'company.industry_id' => 'required',
            'company.occupation_id' => 'required',
        ];
    }
}
