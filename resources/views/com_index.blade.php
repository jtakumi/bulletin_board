<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>質問投稿掲示板_登録企業一覧</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <!--表示領域-->
    <body>
     <link rel="stylesheet" href={{ asset('/public/css/index.css') }}/>
        
        
        <h1>質問投稿掲示板_登録企業一覧</h1>
        <p class='create2'>[<a href='/questions/create2'>質問投稿</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a></p>
        <a href="/">戻る</a></div>
        <div class "companies">
            @foreach ($questions as $question)
            <div class= 'question'>
                <h2 class= 'title' >
                    <a href="/questions/{{$question->id}}">{{$question->title}}</a>
                </h2>
                <p class= 'body'>{{$question->body}}</p>
            </div>
            <form action="/questions/{{ $question->id }}" id="form_{{ $question->id}}">
            <a href="">{{ $post->category->name }}</a>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $questions->links() }}
        </div>
    </body>
</html>
