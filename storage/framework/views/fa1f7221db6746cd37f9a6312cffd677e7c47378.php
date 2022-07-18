<?php $__env->startSection('title', 'OrganicFood'); ?>
<?php $__env->startSection('content'); ?>
    <nav class="grid wide">
        <div class="row">
            <div class="col l-4 m-0 c-0">
                <div class="avt_member">
                    <img class="avatar_member" src="<?php echo e(asset('member/img/' . session('member')->picture)); ?>" alt="">
                </div>
            </div>
            <div class="col l-8 m-12 c-12">

                <div class="row">

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <a href="<?php echo e(url('home/memberProfile/' . session('member')->id)); ?>"
                                class="content_profile_F"><span class="">Profile</span></a>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <a href="<?php echo e(url('home/orderHistory/'.session('member')->id)); ?>" class="content_profile_F"><span class="">Order History</span></a>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <span class="content_profile">Change password</span>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <a href="<?php echo e(url('home/memberFeedbackHistory/'.session('member')->id)); ?>" class="content_profile_F"><span>History feedback</span></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div style="border-bottom: 1px solid; margin-top:30px"></div>

        <div class="title_profile">
            Change password
        </div>
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <?php if(session('passT')): ?>
                    <span class="alert alert-success" style="color: green">
                        <?php echo e(session('passT')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="col l-12 m-12 c-12">
                <?php if(session('passF')): ?>
                    <span class="alert alert-danger" style="color: red">
                        Error: <?php echo e(session('passF')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <form class="change_pass_form" action="<?php echo e(url('home/PostMemberChangePass/' . session('member')->id)); ?>" method="get">
                Old password:
                <div class="col l-12 m-12 c-12"><input type="text" name="old_pass" class="form-control"></div>
                New password:
                <div class="col l-12 m-12 c-12"><input type="text" name="new_pass" class="form-control"></div>
                Confirm password:
                <div class="col l-12 m-12 c-12"><input type="text" name="confirm_pass" class="form-control"></div>
                <button class="button_change_pass">Change</button>
            </form>
        </div>

    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/home/changePass.blade.php ENDPATH**/ ?>