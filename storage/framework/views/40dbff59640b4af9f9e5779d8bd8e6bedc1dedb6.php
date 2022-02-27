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
     <link rel="stylesheet" href=<?php echo e(asset('/public/css/index.css')); ?>/>
        <h1>面接質問投稿掲示板_トップページ</h1>
        <p class="login">[<a heaf="/login">ログイン</a>]</p>
        <p class='create2'>[<a href='/questions/create2'>質問投稿</a>]</p>
        <p class=com_index>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
        <div class "questions">
            <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class= 'question'>
                <h2 class= 'title' >
                    <a href="/questions/<?php echo e($question->id); ?>"><?php echo e($question->title); ?></a>
                </h2>
                <p class= 'body'><?php echo e($question->body); ?></p>
            </div>
            <form action="/questions/<?php echo e($question->id); ?>" id="form_<?php echo e($question->id); ?>">
            <a href=""><?php echo e($post->category->name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class='paginate'>
            <?php echo e($questions->links()); ?>

        </div>
    </body>
</html>
<?php /**PATH /home/ec2-user/environment/bulletin_board/resources/views/index2.blade.php ENDPATH**/ ?>