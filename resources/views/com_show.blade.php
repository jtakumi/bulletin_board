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
        <p class="edit">[<a href="/companies/{{ $company->id }}/com_edit">企業編集</a>]</p>
         <form action="/companies/{{ $company->id }}" id="form_delete" method="post">
                @csrf
                @method('DELETE')
                <p class="delete">[<span onclick="return deletePost(this);">削除</span>]</p>
                </form>
        <div class='companies'>
            「企業名」
            //company_tableからidとnameを取得
            <h2 class='name'>{{ $company->name}}</h2>
            「本社の住所」
            //company_tableからaddressを取得
            <p class='address'>{{ $company->address }}</p>
            「業界」
            //company_tableからindustryを取得してnameを照合する
            <p class='industry_id'>{{ $company->industry->name }}</p>
            「職種」
            //company_tableからoccupationを取得してnameを照合する
            <p class='occupation_id'>{{ $company->occupation->name}}</p>
                <p class='update_at'>{{ $company->update_at}}</p>
            </div>
        //リンク集
        <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
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
