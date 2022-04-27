<!DOCTYPE html>
//お問い合わせフォームのindex
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.app')
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問投稿掲示板_お問い合わせフォーム</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
@section('content')
    <body>
        <h2>面接質問投稿掲示板_お問い合わせフォーム</h2>
        //お問い合わせフォームへのリンクとボタン
            <a href="{{ route('notice.mail.make') }}">
            <button>
            問い合わせフォーム
            </button>
        </a>
        //リンク集
        <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
        <p class=com_index>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
        <p class=index>[<a href='/'>トップページへ</a>]</p>
    </body>
@endsection
</html>