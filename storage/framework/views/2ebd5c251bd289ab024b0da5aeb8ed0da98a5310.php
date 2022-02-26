<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>質問投稿掲示板</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>質問投稿掲示板</h1>
        <form action="/questions/" method="POST">
            <?php echo csrf_field(); ?>
            <div class="questionText">
                <h2>質問</h2>
                <input type="text" name="question[questionText]" placeholder="質問" value="<?php echo e(old('question.questionText')); ?>"/>
                <p class="questionText_error" style="color:red"><?php echo e($errors->first('question.questionText')); ?></p>
            </div>
            <div class="answer">
                <h2>質問への解答</h2>
                <textarea name="question[answer]" placeholder="質問への解答"><?php echo e(old('question.answer')); ?></textarea>
                <p class="answer_error" style="color:red"><?php echo e($errors->first('question.answer')); ?></p>
            <div class="feedback">
                <h2>面接官の反応</h2>
                <textarea name="question[feedback]" placeholder="面接官の反応"/><?php echo e(old('question.feedback')); ?></textarea>
                <p class="feedback_error" style="color:red"><?php echo e($errors->first('question.feedback')); ?></p>
                </div>
            <div class="user_id"/>
                <h2>userID</h2>
                    <input type="tel" name="question[user_id]"
                    placeholder="userID" value="<?php echo e(old('question.user_id')); ?>"/>
                    <p class="user_id_error" style="color:red"><?php echo e($errors->first('question.user_id')); ?></p>
                </div>
            
            <div class="company_id"/>
                <h2>企業ID</h2>
                    <input type="tel" name="question[company_id]"
                    placeholder="応募企業id" value="<?php echo e(old('question.company_id')); ?>"/>
                    <p class="company_id_error" style="color:red"><?php echo e($errors->first('question.company_id')); ?></p>
                </div>
            </div>
            <input type="submit" value="投稿"/>
                </form>
                <p class='com_index'>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
                <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
                 <p class='index2'>[<a href="/">戻る</a>]</p>
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
<?php /**PATH /home/ec2-user/environment/bulletin_board/resources/views/create2.blade.php ENDPATH**/ ?>