<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問投稿掲示板</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <!--表示領域-->
    <body>
        <?php $__env->startSection('content'); ?>
        <h1>面接質問投稿掲示板_トップページ</h1>
        <div class="questions">
            <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class= 'question'>
                「質問」
                <h2 class= 'questionText' >
                    <a href="/questions/<?php echo e($question->id); ?>"><?php echo e($question->questionText); ?></a>
                </h2>
                「質問への回答」
                <p class= 'answer'><?php echo e($question->answer); ?></p>
                <form action="/questions/<?php echo e($question->id); ?>" id="form_<?php echo e($question->id); ?>">
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class='paginate'>
            <?php echo e($questions->links()); ?>

          </div>
        </div>
        <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
        <p class=com_index>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
    </body>
    <?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/bulletin_board/resources/views/index.blade.php ENDPATH**/ ?>