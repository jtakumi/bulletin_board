<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    
    <?php $__env->startSection('content'); ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問掲示板</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>面接質問掲示板_企業詳細閲覧画面</h1>
        <p class="edit">[<a href="/companies/<?php echo e($company->id); ?>/com_edit">企業編集</a>]</p>
         <form action="/companies/<?php echo e($company->id); ?>" id="form_delete" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <p class="delete">[<span onclick="return deletePost(this);">削除</span>]</p>
                </form>
        <div class='companies'>
            「企業名」
            <h2 class='name'><?php echo e($company->name); ?></h2>
            「本社の住所」
            <p class='address'><?php echo e($company->address); ?></p>
            「業界」
            <p class='industry_id'><?php echo e($company->industry->name); ?></p>
            「職種」
            <p class='occupation_id'><?php echo e($company->occupation->name); ?></p>
                <p class='update_at'><?php echo e($company->update_at); ?></p>
            </div>
        <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
        <p class='com_index'>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
        <div class='footer'>
            [<a href="/">戻る</a>]
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
    <?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/bulletin_board/resources/views/com_show.blade.php ENDPATH**/ ?>