<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問掲示板</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>面接質問掲示板</h1>
        <p class='create'>[<a href='/posts/create'>create</a>]</p>
        <div class "posts">
            @foreach ($posts as $post)
            <div class= 'post'>
                <h2 class= 'title' >
                    <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                </h2>
                <p class= 'body'>{{$post->body}}</p>
            </div>
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id}}">
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
