<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>面接質問投稿掲示板_企業登録</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>面接質問投稿掲示板_企業登録</h1>
        <form action="/companies/" method="POST">
            <?php echo csrf_field(); ?>
            <div class="name">
                <h2>企業名</h2>
                    <input type="text" name="company[name]" placeholder="応募企業名" value="<?php echo e(old('company.name')); ?>"/>
                    <p class="name_error" style="color:red"><?php echo e($errors->first('company.name')); ?></p>
                </div>
            
            <div class="address">
                <h2>住所</h2>
                <input type="text" name="company[address]" placeholder="会社の本社の住所" value="<?php echo e(old('company.address')); ?>"/>
                <p class="address_error" style="color:red"><?php echo e($errors->first('company.address')); ?></p>
            </div>
            <div class="industry_id">
                <h2>業界</h2>
                <select name="company[industry_id]">
                    <?php $__currentLoopData = $industries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e(old('company.industry_id',$industry->id)); ?> "><?php echo e($industry->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="occupation_id">
                <h2>職種</h2>
                <select name="company[occupation_id]">
                    <?php $__currentLoopData = $occupations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $occupation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e(old('company.occupation_id',$occupation->id)); ?> "><?php echo e($occupation->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
                <input type="submit" value="企業情報投稿"/>
            </form>
                <p class='create'>[<a href='/questions/create'>質問投稿</a>]</p>
                <p class='com_index'>[<a href='/companies/com_index'>登録企業一覧</a>]</p>
           <p class='index2'>[ <a href="/">トップページへ</a>]</p>
           
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/bulletin_board/resources/views/com_create.blade.php ENDPATH**/ ?>