<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Question;

class QuestionController extends Controller
{
    public function index(Question $question)
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
    }
}
