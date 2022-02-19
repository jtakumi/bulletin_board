<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Question;
use App\Industry;
use App\Company;
use App\Occupation;
use App\User;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    
    public function index(Question $question)
    {
        return view('index')->with(['questions' => $question->getPaginateByLimit()]);
    }
    
    public function show(Question $question,Company $company)
    {
        return view('show')->with(['question' => $question,'company' => $company->get()]);
    }

    public function create(Company $company,Question $question)
    {
        return view('create')->with(['companies' => $company->get(),
        'question[user_id]' => auth()->id()]);
    }
    
    public function store(Question $question,QuestionRequest $request )
    {
        $input = $request['question'];
        $input['user_id']=auth()->user()->id();
        $question->fill($input)->save();
        return redirect('/questions/' . $question->id);
    }
    
    public function edit(Question $question,Company $company)
    {
        return view('edit')->with(['question' => $question,
        'question[user_id]' =>auth()->id(),
        'companies' => $company->get()]);
    }
    
    public function update(Question $question,QuestionRequest $request)
    {
        $input = $request['question'];
        $question->fill($input)->save();
        return redirect('/questions/' . $question->id);
    }
    public function delete(Question $question)
    {
        $question->delete();
        return redirect('/');
    }
}
