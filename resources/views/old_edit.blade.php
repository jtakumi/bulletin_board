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
        <h1>edit view</h1>
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]"  value="{{ $post->title }}"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea type="text" name="post[body]" placeholder="今日も一日お疲れさまでした。">
                 {{ $post->body}} </textarea>
            </div>
            <input type="submit" value="update"/>
            </form>
          <div class='footer'>
        <a href="/">戻る</a>
        </body>
    </div>
</html>
