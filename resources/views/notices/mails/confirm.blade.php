<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.app')
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問投稿掲示板_お問い合わせフォーム_確認画面</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
@section('content')
    <body>
        <form action="{{ route('notice.mail.send') }}" method="post">
        @csrf
        <h1>面接質問投稿掲示板_お問い合わせフォーム_確認画面</h1>
            //メールの題名
            <div class="subject">
                <h2>subject</h2>
                <p>{{ $viewData['postData']['subject'] }}</p>
                <input type='hidden' name='subject' value="{{ $viewData['postData']['subject'] }}">
            </div>
            //本文
            <div class='content'>
            <h2>content</h2>
            <p>{{!! nl2br(e($viewData['postData']['content'])) !!}}</p>
                <input type='hidden' name='content' value="{{ $viewData['postData']['content'] }}">
            </div>
            //送信ボタン
            <input type="submit" value="送信"/>
        </form>
        <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
        <p class=com_index>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
    </body>
@endsection
</html>