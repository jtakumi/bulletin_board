<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問投稿掲示板</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>面接質問投稿掲示板_編集画面</h1>
        <p class="login">[<a heaf="/login">ログイン</a>]</p>
        <form action="/questions/{{$questions->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="questionText">
                <h2>質問</h2>
                <input type="text" name="questions[questionText]"  value="{{ $questions->questionText }}"/>
            </div>
            <div class="answer">
                <h2>質問への解答</h2>
                <textarea type="text" name="questions[answer]" placeholder="質問への解答">
                 {{ $questions->answer}} </textarea>
            </div>
            <div class="feedback">
                <h2>面接官の反応</h2>
                <input type="textarea" name="questions[feedback]" placeholder="面接官の反応"/>{{$questions->feedback }}</textarea>
                </div>
                <div class="user_id"/>
                <h2>userID</h2>
                    <input type="text" name="questions[user_id]" placeholder="userID" value="{{$questions->user_id  }}"/>
                </div>
                <div class="company_id"/>
                <h2>企業ID</h2>
                    <input type="text" name="questions[company_id]" placeholder="応募企業ID" value="{{$questions->company_id  }}"/>
                </div>
            <input type="submit" value="update"/>
            </form>
            <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
            <p class='com_index'>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
                <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
          <div class='footer'>
        <a href="/">トップページへ</a>
        </div>
        </body>
</html>
