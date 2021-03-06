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
        <h1>面接質問投稿掲示板_質問投稿画面</h1>
        <form action="/questions/" method="POST">
            @csrf
            <div class="questionText">
                //質問の題名を入力して、old関数でエラーが発生しても入力データを残す
                <h2>質問</h2>
                <input type="text" name="question[questionText]" placeholder="質問" value="{{ old('question.questionText') }}"/>
                //エラーが発生した場合赤字でエラー文を表示
                <p class="questionText_error" style="color:red">{{ $errors->first('question.questionText') }}</p>
            </div>
            <div class="answer">
                //質問の返答を入力して、old関数でエラーが発生しても入力データを残す
                <h2>質問への解答</h2>
                <textarea name="question[answer]" placeholder="質問への解答" cols="30" rows="10">{{ old('question.answer') }}</textarea>
                //エラーが発生した場合赤字でエラー文を表示
                <p class="answer_error" style="color:red">{{ $errors->first('question.answer') }}</p>
            <div class="feedback">
                <h2>面接官の反応</h2>
                //面接官の反応を入力して、old関数でエラーが発生しても入力データを残す
                <textarea name="question[feedback]" placeholder="面接官の反応" cols="30" rows="10">{{old('question.feedback') }}</textarea>
                //エラーが発生した場合赤字でエラー文を表示
                <p class="feedback_error" style="color:red">{{ $errors->first('question.feedback') }}</p>
            </div>
            <div class="user_id">
                <h2>UserId(readonly)</h2>
                //取得したユーザーidを表示する(書き換え不可)
                 <input type="text" name="question[user_id]"  value="{{ Auth::id() }}"　readonly/>
                 //エラーが発生した場合赤字でエラー文を表示
                <p class="user_id_error" style="color:red">{{ $errors->first('question.user_id') }}</p>
                </div>
            <div class="company_id"/>
                <h2>企業</h2>
                    //企業名を取得
                    <select name="question[company_id]">
                    @foreach($companies as $company)
                    <option value="{{ old('question.company_id',$company->id) }} ">{{ $company->name }}</option>
                    @endforeach
                    </select>
            </div>
            </div>
            <input type="submit" value="質問投稿"/>
            </form>
                //リンク集
                <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
                <p class='com_index'>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
                 <p class='index2'>[<a href="/">トップページへ</a>]</p>
             //削除前の最終確認
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
</html>
