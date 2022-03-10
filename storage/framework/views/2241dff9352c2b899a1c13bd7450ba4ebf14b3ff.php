<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問掲示板</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>質問</h1>
        <p class="edit">[<a href="/questions/<?php echo e($question->id); ?>/edit2">edit</a>]</p>
         <form action="/questions/<?php echo e($question->id); ?>" id="form_delete" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <p class="delete">[<span onclick="return deletePost(this);">delete</span>]</p>
                </form>
        <div class='questions'>
            <h2 class='title'><?php echo e($question->title); ?></h2>
            <p class='boby'><?php echo e($question->body); ?></p>
            <p class='feedback'><?php echo e($question->feedback); ?></p>
            <p class='industry'><?php echo e($question->industry); ?></p>
            <p class='occupation'><?php echo e($question->occupation); ?></p>
            <p class='company'><?php echo e($question->company); ?></p>
                <p class='update_at'><?php echo e($question->update_at); ?></p>
            </div>
        <div class='footer'>
            <a href="/">戻る</a>
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
        </div>
    </body>
</html>
<?php /**PATH /home/ec2-user/environment/bulletin_board/resources/views/show2.blade.php ENDPATH**/ ?>