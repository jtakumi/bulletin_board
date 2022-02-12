<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    @section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問掲示板</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>面接質問掲示板_企業詳細閲覧画面</h1>
        <p class="login">[<a heaf="/login">ログイン</a>]</p>
        <p class="edit">[<a href="/campanies/{{ $companies->id }}/edit">企業編集</a>]</p>
         <form action="/companies/{{ $companies->id }}" id="form_delete" method="post">
                @csrf
                @method('DELETE')
                <p class="delete">[<span onclick="return deletePost(this);">削除</span>]</p>
                </form>
        <div class='companies'>
            <h2 class='name'>{{ $companies->name}}</h2>
            <p class='address'>{{ $companies->address }}</p>
            <p class='industry_id'>{{ $companies->industry_id }}</p>
            <p class='occupation_id'>{{ $companies->occupation_id}}</p>
                <p class='update_at'>{{ $companies->update_at}}</p>
            </div>
        <p class='create2'>[<a href='/questions/create'>質問投稿</a>]</p>
        <p class='com_index'>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
        <div class='footer'>
            [<a href="/">戻る</a>]
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
    @endsection
</html>
