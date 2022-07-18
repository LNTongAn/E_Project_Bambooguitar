<?php $__env->startSection('title', 'OrganicFood'); ?>
<?php $__env->startSection('content'); ?>
    <br>
    <nav class="grid wide background_white">
        <h1><?php echo e($b->topic); ?></h1>
        <h4 style="color:gray;"><?php echo e($b->date); ?></h4>
        <img style="padding: 0 130px 0 130px" src="<?php echo e(url('img/'.$b->image)); ?>" alt="" width="100%" height="450px">
        <br><h3 style="padding: 0 50px 0 50px"><?php echo $b->content; ?></h3>
    </nav>
    <style>
        .background_white{
            background-color: white;
            padding: 2px 15px 8px 15px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/home/blogDetail.blade.php ENDPATH**/ ?>