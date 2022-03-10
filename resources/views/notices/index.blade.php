<!DOCTYPE html>
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
            <a href="{{ route('notice.mail.make') }}">
            <button>
            問い合わせフォーム
            </button>
        </a>
    </body>
@endsection
</html>