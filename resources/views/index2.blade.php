<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div>
            @foreach($results as $result)
            <div>{{ $result['name'] }}</div>
            @endforeach
        </div>
        <h1>質問投稿掲示板</h1>
        <p class='create'>[<a href='/questions/create'>create</a>]</p>
        <div class "questions">
            @foreach ($questions as $question)
            <div class= 'question'>
                <h2 class= 'title' >
                    <a href="/questions/{{$question->id}}">{{$question->title}}</a>
                </h2>
                <p class= 'body'>{{$question->body}}</p>
            </div>
            <form action="/questions/{{ $question->id }}" id="form_{{ $question->id}}">
            @endforeach
        </div>
        <div class='paginate'>
            {{ $questions->links() }}
        </div>
    </body>
</html>
