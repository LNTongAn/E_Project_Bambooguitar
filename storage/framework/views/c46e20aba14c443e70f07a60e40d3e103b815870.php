<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
    
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/dropdown_home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/grid.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/product.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/toast.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/loginMember.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/signUp.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/memberProfile.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/backToTop.css')); ?>">

</head>

<body style="background-color: #EEEEEE">


    <?php echo $__env->make('layout.nav-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class='lentop'>
        <div>
            <img src="<?php echo e(asset('img/top.png')); ?>" />
        </div>
    </div>

    <?php echo $__env->yieldContent('content'); ?>


    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    </div>

    <script src="<?php echo e(asset('js/top.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-2.1.1.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/home.js')); ?>"></script>
    <script src="<?php echo e(asset('js/button.js')); ?>"></script>
    <script src="<?php echo e(asset('js/toast_messages.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- <script src="<?php echo e(asset('js/product_button.js')); ?>"></script> -->
    <!-- page script -->
    <?php echo $__env->yieldContent('script-section'); ?>

</body>

</html>
<?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/layout/layout.blade.php ENDPATH**/ ?>