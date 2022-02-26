<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    
    <?php $__env->startSection('content'); ?>
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
            <div class="company_id"/>
                <h2>企業</h2>
                    <select name="question[company_id]">
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(old('question.company_id',$company->id)); ?> "><?php echo e($company->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
            </div>
            </div>
            <input type="submit" value="質問投稿"/>
            </form>
                <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
                <p class='com_index'>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
                 <p class='index2'>[<a href="/">トップページへ</a>]</p>
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
    <?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/bulletin_board/resources/views/create.blade.php ENDPATH**/ ?>