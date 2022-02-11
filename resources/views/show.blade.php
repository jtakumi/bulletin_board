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
        <h1>面接質問掲示板_質問閲覧</h1>
        <p class="login">[<a heaf="/login">ログイン</a>]</p>
        <p class="edit">[<a href="/questions/{{ $question->id }}/edit">編集</a>]</p>
         <form action="/questions/{{ $question->id }}" id="form_delete" method="post">
                @csrf
                @method('DELETE')
                <p class="delete">[<span onclick="return deletePost(this);">削除</span>]</p>
                </form>
        <div class='questions'>
            <h2 class='questionText'>{{ $question->questionText}}</h2>
            <p class='answer'>{{ $question->answer }}</p>
            <p class='feedback'>{{ $question->feedback }}</p>
            <p class='user_id'>{{ $question->user_id}}</p>
            <p class='company_id'>{{ $question->company_id }}</p>
                <p class='update_at'>{{ $question->update_at}}</p>
            </div>
        <p class='create2'>[<a href='/questions/create'>質問投稿</a>]</p>
        <p class='com_index'>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
        <div class='footer'>
            [<a href="/">トップページへ</a>]
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
