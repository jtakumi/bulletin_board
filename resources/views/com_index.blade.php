<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>質問投稿掲示板_登録企業一覧</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <!--表示領域-->
    <body>
     <link rel="stylesheet" href={{ asset('/public/css/index.css') }}/>
        
        
        <h1>質問投稿掲示板_登録企業一覧</h1>
        <p class='create2'>[<a href='/questions/create2'>質問投稿</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a></p>
        <a href="/">戻る</a></div>
        <div class "companies">
            @foreach ($companies as $company)
            <div class= 'company'>
                <p class='id'>{{ $company->id }}</p>
                <h2><p class= 'name' >{{$company->name}}</p></h2>
                <p class= 'address'>{{$company->address}}</p>
                <p class='industry_id'>{{ $company->industry_id}}</p>
                <p class='occupation_id'>{{ $company->occupation_id}}</p>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $companies->links() }}
        </div>
    </body>
</html>
