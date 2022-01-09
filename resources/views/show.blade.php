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
        <h1>title</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
         <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
                @csrf
                @method('DELETE')
                <p class="delete">[<span onclick="return deletePost(this);">delete</span>]</p>
                </form>
        <div class='post'>
            <h2 class='title'>{{ $post->title }}</h2>
            <p class='boby'>{{ $post->body }}</p>
                <p class='update_at'>{{ $post->update_at}}</p>
            </div>
        <div class='footer'>
            <a href="/">戻る</a>
            <script>
            function deletePost(e)
            {
                'use strict';
                if(confirm("完全に削除します。よろしいでしょうか？"))
                {
                    document.getElementById('form_delete').submit();
                }
            }
            </script>
        </div>
    </body>
</html>
