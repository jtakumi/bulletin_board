<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>edit view</h1>
        <form action="/questions/{{$questions->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>質問</h2>
                <input type="text" name="questions[title]"  value="{{ $questions->title }}"/>
            </div>
            <div class="body">
                <h2>質問への解答</h2>
                <textarea type="text" name="questions[body]" placeholder="質問への解答">
                 {{ $questions->body}} </textarea>
            </div>
            <div class="feedback">
                <h2>面接官の反応</h2>
                <input type="textarea" name="questions[feedback]" placeholder="面接官の反応"/>{{$questions->feedback }}</textarea>
                </div>
                <div class="industry">
                    <h2>業界</h2>
                    <input type="text" name="questions[industry]" placeholder="その企業の業界" value="{{$questions->industry }}"/>
                </div>
                <div class="occupation"/>
                <h2>職種</h2>
                    <input type="text" name="questions[occupation]" placeholder="応募職種" value="{{$questions->occupation  }}"/>
                </div>
                <div class="company"/>
                <h2>企業名</h2>
                    <input type="text" name="questions[company]" placeholder="応募企業名" value="{{$questions->company  }}"/>
                </div>
            <input type="submit" value="update"/>
            </form>
          <div class='footer'>
        <a href="/">戻る</a>
        </body>
    </div>
</html>
