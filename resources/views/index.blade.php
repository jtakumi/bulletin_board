<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問投稿掲示板</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <!--表示領域-->
    <body>
     <link rel="stylesheet" href={{ asset('/public/css/index.css') }}/>
        <h1>面接質問投稿掲示板_トップページ</h1>
        <p class="login">[<a heaf="/login">ログイン</a>]</p>
        <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
        <p class=com_index>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
        <div class "questions">
            @foreach ($questions as $question)
            <div class= 'question'>
                <h2 class= 'questionText' >
                    <a href="/questions/{{$question->id}}">{{$question->questionText}}</a>
                </h2>
                <p class= 'answer'>{{$question->answer}}</p>
            </div>
            <form action="/questions/{{ $question->id }}" id="form_{{ $question->id}}">
            @endforeach
        </div>
        <div class='paginate'>
            {{ $questions->links() }}
        </div>
    </body>
</html>
