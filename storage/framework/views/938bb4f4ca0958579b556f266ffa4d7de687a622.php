<?php $__env->startSection('title', 'OrganicFood'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">

        <!--THÔNG BÁO ĐĂNG NHẬP LỖI-->
        <?php if(session('message')): ?>
            <div style="text-align:center;">
                <br>
                <span class="alert alert-danger" style="color: red">
                    Error: <?php echo e(session('message')); ?>

                </span>
            </div>
        <?php endif; ?>
        
        
        <form action="<?php echo e(url('checkLoginAdmin')); ?>" method="post" class="form_login_member">
            <?php echo csrf_field(); ?>
            <div class="title_login_member">
                <span class="content_login_member">Admin</span>
            </div>

            <label class="label_login_member" for="">Username</label><br>
            <input class="password_login_member" name="username" type="username" required><br>
            <label class="label_login_member" for="">Password</label><br>
            <input class="password_login_member" name="password" type="password" required><br>

            <button class="login_button_member">Log in</button>

        </form><br>

    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/loginAdmin.blade.php ENDPATH**/ ?>