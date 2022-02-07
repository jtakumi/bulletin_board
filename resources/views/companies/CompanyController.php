<?php

namespace Resources\Views\companies\CompanyControllers;

use App\Company;

class CompanyController extends Controller
{
    public function create(Industry $industry)
    {
        //
    }
    //return view('companies.create')->with(['']);
}


/*$articles=Question::orderBy('created_at','asc')->where(function ($query)
{
if($search = request('search'))
    {
        $query->where('title','LIKE',"%{$search}%")->orWhere('tag1','LIKE',"%{$search}%")->orWhere('body','LIKE',"%{$search}%");
    }
})->paginate(20);*/