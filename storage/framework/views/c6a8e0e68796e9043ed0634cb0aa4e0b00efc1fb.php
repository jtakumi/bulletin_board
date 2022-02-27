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
        <h1>面接質問投稿掲示板_編集画面</h1>
        <form action="/questions/<?php echo e($question->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="questionText">
                <h2>質問</h2>
                <input type="text" name="question[questionText]"  value="<?php echo e($question->questionText); ?>"/>
            </div>
            <div class="answer">
                <h2>質問への解答</h2>
                <textarea type="text" name="question[answer]" placeholder="質問への解答">
                 <?php echo e($question->answer); ?> </textarea>
            </div>
            <div class="feedback">
                <h2>面接官の反応</h2>
                <textarea type="text" name="question[feedback]" placeholder="面接官の反応">
                    <?php echo e($question->feedback); ?></textarea>
                    </div>
            <div class="company_id"/>
                <h2>企業</h2>
                    <select name="question[company_id]">
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(old('question.company_id',$company->id)); ?> "><?php echo e($company->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
            <input type="submit" value="update"/>
            </form>
            <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
            <p class='com_index'>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
                <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
          <div class='footer'>
        [<a href="/">トップページへ</a>]
        </div>
        </body>
        <?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/bulletin_board/resources/views/edit.blade.php ENDPATH**/ ?>