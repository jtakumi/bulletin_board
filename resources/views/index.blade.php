<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問投稿掲示板</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <!--表示領域-->
    <body>
        <h1>面接質問投稿掲示板_トップページ</h1>
        @section('content')
        <div class "questions">
            @foreach ($questions as $question)
            <div class= 'question'>
                「質問」
                <h2 class= 'questionText' >
                    <a href="/questions/{{$question->id}}">{{$question->questionText}}</a>
                </h2>
                「質問への回答」
                <p class= 'answer'>{{$question->answer}}</p>
                <form action="/questions/{{ $question->id }}" id="form_{{ $question->id}}">
            </div>
            @endforeach
            <div class='paginate'>
            {{ $questions->links() }}
          </div>
        </div>
        @endsection
        <div class='pages'>
        <p class="login">[<a heaf="/login">ログイン</a>]</p>
        <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
        <p class=com_index>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
        </div>
    </body>
</html>
