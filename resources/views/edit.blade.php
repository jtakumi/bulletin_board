<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    @section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問投稿掲示板</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>面接質問投稿掲示板_編集画面</h1>
        <form action="/questions/{{$question->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="questionText">
                <h2>質問</h2>
                //質問の題名をquestion_tableで取得して表示
                <input type="text" name="question[questionText]"  value="{{ $question->questionText }}"/>
            </div>
            <div class="answer">
                <h2>質問への解答</h2>
                //質問の返答をquestion_tableで取得して表示
                <textarea type="text" name="question[answer]" placeholder="質問への解答" cols="30" rows="10">
                 {{ $question->answer}} </textarea>
            </div>
            <div class="feedback">
                <h2>面接官の反応</h2>
                //面接官の反応をquestion_tableで取得して表示
                <textarea type="text" name="question[feedback]" placeholder="面接官の反応" cols="30" rows="10">
                    {{$question->feedback }}</textarea>
                    </div>
            <div class="company_id"/>
                <h2>企業</h2>
                    //company_tableから企業名を取得
                    <select name="question[company_id]">
                    @foreach($companies as $company)
                    <option value="{{ old('question.company_id',$company->id) }} ">{{ $company->name }}</option>
                    @endforeach
                    </select>
            <input type="submit" value="update"/>
            </form>
            //リンク集
            <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
            <p class='com_index'>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
                <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
          <div class='footer'>
        [<a href="/">トップページへ</a>]
        </div>
        </body>
        @endsection
</html>
