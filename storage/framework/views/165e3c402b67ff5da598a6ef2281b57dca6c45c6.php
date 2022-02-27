<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    
     <?php $__env->startSection('content'); ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>質問投稿掲示板_登録企業一覧</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <!--表示領域-->
    <body>
        <h1>質問投稿掲示板_登録企業一覧</h1>
        <div class="companies">
            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class='company'>
                「企業名」
                <h2 class= 'name'>
                    <a href="/companies/<?php echo e($company->id); ?>" ><?php echo e($company->name); ?></a>
                    </h2>
                    「本社の住所」
                <p class= 'address'><?php echo e($company->address); ?></p>
                「業界」
                <p class='industry_id'><?php echo e($company->industry->name); ?></p>
                「職種」
                <p class='occupation_id' ><?php echo e($company->occupation->name); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class='paginate'>
                <?php echo e($companies->links()); ?>

                </div>
        </div>
        <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
        <p class=com_create>[<a href='/companies/com_create/'>企業登録</a>]</p>
        <p class='index'>[ <a href="/">トップページへ</a>]</p>
        <?php $__env->stopSection(); ?>
    </body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/bulletin_board/resources/views/com_index.blade.php ENDPATH**/ ?>