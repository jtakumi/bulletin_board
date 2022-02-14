<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    @section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問投稿掲示板</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <h1>面接質問投稿掲示板_企業編集画面</h1>
        <p class="login">[<a heaf="/login">ログイン</a>]</p>
        <form action="/companies/{{$company->id}}" method="POST">
            @csrf
            @method('PUT')
             <form action="/companies/{{ $company->id }}" id="form_delete" method="post">
                @csrf
                @method('DELETE')
                <p class="delete">[<span onclick="return deletePost(this);">削除</span>]</p>
                </form>
               <div class="name">
                <h2>企業名</h2>
                    <input type="text" name="company[name]" placeholder="応募企業名" value="{{old('company.name') }}"/>
                    <p class="name_error" style="color:red">{{ $errors->first('company.name') }}</p>
                </div>
            
            <div class="address">
                <h2>住所</h2>
                <input type="text" name="company[address]" placeholder="会社の本社の住所" value="{{ old('company.address') }}"/>
                <p class="address_error" style="color:red">{{ $errors->first('company.address') }}</p>
            </div>
            <div class="industry_id">
                <h2>業界</h2>
                <select name="company[industry_id]">
                    @foreach($industries as $industry)
                      <option value="{{ old('company.industry_id',$industry->id) }} ">{{ $industry->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="occupation_id">
                <h2>職種</h2>
                <select name="company[occupation_id]">
                    @foreach($occupations as $occupation)
                      <option value="{{ old('company.occupation_id',$occupation->id) }} ">{{ $occupation->name }}</option>
                    @endforeach
                </select>
            </div>
            <br>
                <input type="submit" value="企業情報編集"/>
            </form>
                <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
                <p class='com_index'>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
           <p class='index2'>[ <a href="/">トップページへ</a>]</p>
           
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
        </body>
        @endsection
    </div>
</html>
