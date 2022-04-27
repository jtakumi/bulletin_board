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
        #質問一覧表示
        return view('index')->with(['questions' => $question->getPaginateByLimit()]);
    }
    
    public function show(Question $question,Company $company)
    {
        #詳細画面
        return view('show')->with(['question' => $question,'company' => $company->get()]);
    }

    public function create(Company $company,Question $question)
    {
        #作成画面
        #ログイン中のユーザーを認識
        $auths=Auth::id();
        return view('create')->with(['companies' => $company->get(),
        'auths' =>$auths]);
    }
    
    public function store(Question $question,QuestionRequest $request )
    {
        #アップロード
        $input = $request['question'];
        $question->fill($input)->save();
        return redirect('/questions/' . $question->id);
    }
    
    public function edit(Question $question,Company $company)
    {
        #編集
        return view('edit')->with(['question' => $question,
        'companies' => $company->get()]);
    }
    
    public function update(Question $question,QuestionRequest $request)
    {
        #変更
        $input = $request['question'];
        $question->fill($input)->save();
        return redirect('/questions/' . $question->id);
    }
    public function delete(Question $question)
    {
        #削除
        $question->delete();
        return redirect('/');
    }
}
