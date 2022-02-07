<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>質問投稿掲示板_企業登録</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>質問投稿掲示板_企業登録</h1>
        <form action="/companies" method="POST">
            @csrf
            <div class="name"/>
                <h2>企業名</h2>
                    <input type="text" name="company[name]"
                    placeholder="応募企業名" value="{{old('company.name') }}"/>
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
                      <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="occupation_id">
                <h2>職種</h2>
                <select name="company[occupation_id]">
                    @foreach($occupations as $occupation)
                      <option value="{{ $occupation->id }}">{{ $occupation->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="企業情報投稿"/>
                </form>
                 <div class='footer'>
            <a href="/">戻る</a></div>
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
</html>
