<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Question;
use App\Industry;
use App\Company;
use App\Occupation;

class QuestionController extends Controller
{
    /*public function index(Question $question)
    {
    return view('index')->with(['question' => $question->getPaginateByLimit()]);
    }
    
    public function show(Question $question)
    {
    return view('show')->with(['question' => $question]);
    }

    public function create()
    {
        return view('create');
    }
    
    public function store(Question $question,QuestionRequest $request )
    {
        $input = $request['question'];
        $question->fill($input)->save();
        return redirect('/question/' . $question->id);
    }
    
    public function edit(Question $question)
    {
        return view('edit')->with(['question' => $question]);
    }
    
    public function update(Question $question,QuestionRequest $request)
    {
          $input = $request['question'];
        $question->fill($input)->save();
        return redirect('/question/' . $question->id);
    }
    public function delete(Question $question)
    {
        $question->delete();
        return redirect('/');
    }*/
    public function index(Question $question)
    {
       /* $client = new \GuzzleHttp\Client();
        
        $url='https://job.yahooapis.jp/v1/furusato/company/?appid=dj00aiZpPTNQeTY1eVdmOTNMZiZzPWNvbnN1bWVyc2VjcmV0Jng9Yjg-';
        $respose=$client->request(
            'GET',
            $url,);
            $results=json_decode($respose->getBody(),true);*/
        
    return view('index')->with(['questions' => $question->getPaginateByLimit()]);
    }
    
    public function show(Question $question)
    {
    return view('show')->with(['questions' => $question]);
    }

    public function create(Company $company)
    {
        return view('create')->with(['companies' => $company->get()]);
    }
    
    public function store(Question $question,QuestionRequest $request )
    {
        $input = $request['questions'];
        $question->fill($input)->save();
        return redirect('/questions/' . $question->id);
    }
    
    public function edit(Question $question)
    {
        return view('edit')->with(['questions' => $question]);
    }
    
    public function update(Question $question,QuestionRequest $request)
    {
          $input = $request['questions'];
        $question->fill($input)->save();
        return redirect('/questions/' . $question->id);
    }
    public function delete(Question $question)
    {
        $question->delete();
        return redirect('/');
    }
}
