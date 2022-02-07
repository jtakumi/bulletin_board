<?php

namespace App\Http\Controllers;

use App\Company;
use App\Industry;
use App\Occupation;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function com_index(Company $company)
    {
        return view('com_index')->with(['companies' => $company->getPaginate()]);    
    }

    public function com_show(Industry $industry,Occupation $occupation)
    {
        return view('com_show')->with(['industries' => $industry->get()],
        ['occupations' => $occupation->get()]);;
    }

    public function com_create(Industry $industry, Occupation $occupation)
    {
        return view('com_create')->with(['industries' => $industry->get(),
        'occupations' => $occupation->get()]);
    }

    public function com_store(Company $company, companyRequest $request) // 引数をRequest->PostRequestにする
    {
        $input = $request['company'];
        $company->fill($input)->save();
        return redirect('/companies/' . $company->id);
    }
}


/*$articles=Question::orderBy('created_at','asc')->where(function ($query)
{
if($search = request('search'))
    {
        $query->where('title','LIKE',"%{$search}%")->orWhere('tag1','LIKE',"%{$search}%")->orWhere('body','LIKE',"%{$search}%");
    }
})->paginate(20);*/