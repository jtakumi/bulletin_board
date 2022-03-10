<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.app')
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問投稿掲示板_お問い合わせフォーム_本文作成</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
@section('content')
    <body>
        <form action="{{ route('notice.mail.confirm') }}" method="post">
        @csrf
        <h1>面接質問投稿掲示板_お問い合わせフォーム_本文作成</h1>
            
            <div class="subject">
                <h2>subject</h2>
                <input type="text" name="subject" placeholder="please input subject" value="{{ old('subject') }}" />
                <p class="subject_error" style=color:red>{{$error->first('subject')}}</p>
            </div>
            <h2>content</h2>
                <textarea name="content" placeholder="please input content" cols="30" rows="10!">{{ old('content') }}</textarea>
                <p class="content_error" style=color:red>{{$error->first('content')}}</p>
            </div>
            <input type="submit" value="確認画面へ"/>
        </form>
    </body>
@endsection
</html>