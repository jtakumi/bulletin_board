<?php

namespace App\Http\Controllers;

use App\Company;
use App\Industry;
use App\Occupation;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function index(Company $company)
    {
        return view('com_index')->with(['companies' => $company->getPaginateByLimit()]);    
    }

    public function show(Company $company)
    {
        return view('com_show')->with(['companies' => $company]);
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
    public function edit(Company $Company)
    {
        return view('com_edit')->with(['companies' => $company]);
    }
    
    public function update(Company $company,CompanyRequest $request)
    {
          $input = $request['companies'];
        $company->fill($input)->save();
        return redirect('/companies/' . $company->id);
    }
    public function delete(Company $company)
    {
        $company->delete();
        return redirect('/');
    }
}


/*$articles=Question::orderBy('created_at','asc')->where(function ($query)
{
if($search = request('search'))
    {
        $query->where('title','LIKE',"%{$search}%")->orWhere('tag1','LIKE',"%{$search}%")->orWhere('body','LIKE',"%{$search}%");
    }
})->paginate(20);*/