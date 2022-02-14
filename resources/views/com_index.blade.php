<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>質問投稿掲示板_登録企業一覧</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <!--表示領域-->
    <body>
        <h1>質問投稿掲示板_登録企業一覧</h1>
        @section('content')
        <div class "companies">
            @foreach ($companies as $company)
            <div class='company'>
                「企業名」
                <h2 class= 'name'>
                    <a herf="/companies/{{ $company->id }}" >{{$company->name}}</a>
                    </h2>
                    「本社の住所」
                <p class= 'address'>{{$company->address}}</p>
                「業界」
                <p class='industry_id'>{{ $company->industry->name}}</p>
                「職種」
                <p class='occupation_id' >{{ $company->occupation->name}}</p>
                <form action="/companies/{{ $company->id }}" id="form_{{ $company->id}}">
            </div>
            <br>
            @endforeach
            <div class='paginate'>
                {{ $companies->links() }}
                </div>
            @endsection
        </div>
        <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
        <p class='index'>[ <a href="/">トップページへ</a>]</p>
    </body>
</html>
