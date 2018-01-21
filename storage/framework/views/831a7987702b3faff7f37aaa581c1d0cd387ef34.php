<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
    </div>
     
<script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <!-- Scripts -->
     <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
