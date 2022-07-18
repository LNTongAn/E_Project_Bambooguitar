<!-- lưu tại /resources/views/product/create.blade.php -->

<?php $__env->startSection('title', 'admin'); ?>
<?php $__env->startSection('content_admin'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <?php if(session('message')): ?>
                        <span class="alert alert-danger" style="color: #fff;">
                            <?php echo e(session('message')); ?>

                        </span><br><br>
                    <?php endif; ?>
                    <div class="card card-success shadow">
                        <div class="card-header">
                            <h3 class="card-title">Change password</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo e(url('admin/PostChangePass/'.session('user')->username)); ?>" method="post"
                            enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="card-body">
                                <!-- <div class="form-group">
                                            <label for="txt-id">Produc Id</label>
                                            <input type="text" class="form-control" id="txtid" name="id" placeholder="1">
                                        </div> -->
                                <div class="form-group">
                                    <label for="txt-name">Username</label>
                                    <input type="text" class="form-control" id="txtusername" name="username"
                                        placeholder="Input Product Name" value="<?php echo e(session('user')->username); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Password</label>
                                    <input type="password" class="form-control" id="txtpassword" name="password"
                                        placeholder="Input password" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">New password</label>
                                    <input type="password" class="form-control" id="txtnewpassword" name="NewPassword"
                                        placeholder="Input Product Name" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Confirm password</label>
                                    <input type="password" class="form-control" id="txtconfirm" name="ConfirmPassword"
                                        placeholder="Input Product Name" value="" required>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Change</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <style>
        .offset-md-3 {
            margin-top: 16px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>
    <script src="<?php echo e(asset('admin/plugins/bs-custom-file-input/bs-custom-fileinput.min.js')); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/admin/changePassword.blade.php ENDPATH**/ ?>