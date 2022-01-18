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
        <h1>blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>質問</h2>
                <input type="text" name="question[title]" placeholder="質問" value="{{ old('question.title') }}"/>
                <p class="title_error" style="color:red">{{ $errors->first('question.title') }}</p>
            </div>
            <div class="body">
                <h2>質問への解答</h2>
                <textarea name="question[body]" placeholder="質問への解答">{{ old('question.body') }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('question.body') }}</p>
            </div>
            <div class="feedback">
                <h2>面接官の反応</h2>
                <input type="textarea" name="question[feedback]" placeholder="面接官の反応"/>{{old('question.feedback') }}</textarea>
                </div>
                <div class="industry">
                    <h2>業界</h2>
                    <input type="text" name="question[industry]" placeholder="その企業の業界" value="{{old('question.industry') }}"/>
                </div>
                <div class="occupation"/>
                <h2>職種</h2>
                    <input type="text" name="question[occupation]" placeholder="応募職種" value="{{old('question.occupation') }}"/>
                </div>
                <div class="company"/>
                <h2>企業名</h2>
                    <input type="text" name="question[company]" placeholder="応募企業名" value="{{old('question.company') }}"/>
                </div>
                
            <input type="submit" value="strore"/>
                </form>
                 <div class='footer'>
            <a href="/">戻る</a></div>
    </body>
</html>
