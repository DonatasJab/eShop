<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eShop</title>
    <link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('plugins/magnific/magnific-popup.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('stylesheet'); ?>
    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="<?php echo e(URL::asset('js/pace.min.js')); ?>"></script>
</head>
<body>
    <?php echo $__env->make('partials.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('scripts'); ?>
    <script src="<?php echo e(URL::asset('js/registration.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/login.js')); ?>"></script>
</body>
</html>