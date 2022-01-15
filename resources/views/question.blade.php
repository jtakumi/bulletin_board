<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問投稿掲示板</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>質問投稿</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>質問</h2>
                <input type="text" name="post[title]" placeholder="質問を入力してください" value="{{ old('post.title') }}"/>
                <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>回答</h2>
                <textarea name="post[body]" placeholder="質問に対する回答を入力してください">{{ old('post.body') }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="store"/>
                </form>
                 <div class='footer'>
            <a href="/">戻る</a></div>
    </body>
</html>
