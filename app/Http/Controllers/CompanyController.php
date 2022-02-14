<?php

namespace App\Http\Controllers;

use App\Company;
use App\Industry;
use App\Occupation;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function index(Company $company,Industry $industry, Occupation $occupation)
    {
        return view('com_index')->with(['companies' => $company->getPaginateByLimit(),
        'industry' => $industry->get(),
        'occupation' => $occupation->get()]);    
    }

    public function show(Company $company,Industry $industry, Occupation $occupation)
    {
        return view('com_show')->with(['company' => $company,
        'industry' => $industry->get(),
        'occupation' => $occupation->get()]);
    }

    public function create(Industry $industry, Occupation $occupation)
    {
        return view('com_create')->with(['industries' => $industry->get(),
        'occupations' => $occupation->get()]);
    }

    public function store(Company $company, CompanyRequest $request) // 引数をRequest->PostRequestにする
    {
        $input = $request['company'];
        $company->fill($input)->save();
        return redirect('/companies/' . $company->id);
    }
    public function edit(Company $Company,Industry $industry, Occupation $occupation)
    {
        return view('com_edit')->with(['company' => $company,
        'industries' => $industry->get(),
        'occupations' => $occupation->get()]);
    }
    
    public function update(Company $company,CompanyRequest $request)
    {
          $input = $request['company'];
        $company->fill($input)->save();
        return redirect('/companies/' . $company->id);
    }
    public function delete(Company $company)
    {
        $company->delete();
        return redirect('/companies/com_index');
    }
}


/*$articles=Question::orderBy('created_at','asc')->where(function ($query)
{
if($search = request('search'))
    {
        $query->where('title','LIKE',"%{$search}%")->orWhere('tag1','LIKE',"%{$search}%")->orWhere('body','LIKE',"%{$search}%");
    }
})->paginate(20);*/