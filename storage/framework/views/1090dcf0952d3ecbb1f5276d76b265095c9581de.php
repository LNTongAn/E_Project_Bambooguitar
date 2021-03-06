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
                            <h3 class="card-title">Update customer</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo e(url('admin/customer/PostCustomerUpdate/' .$c->id)); ?>" method="post"
                            enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="card-body">
                                <!-- <div class="form-group">
                                            <label for="txt-id">Produc Id</label>
                                            <input type="text" class="form-control" id="txtid" name="id" placeholder="1">
                                        </div> -->
                                <div class="form-group">
                                    <label for="txt-name">ID</label>
                                    <input type="number" class="form-control" id="txtid" name="id"
                                         value="<?php echo e($c->id); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">E-mail</label>
                                    <input type="text" class="form-control" id="txtemail" name="email"
                                        placeholder="Input Product Email" value="<?php echo e($c->email); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <img style="border-radius:50%;" width="100px" class="img-fluid" src="<?php echo e(url('member/img/'.$c->picture)); ?>" />
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-fileinput" id="picture" name="picture">
                                            <label class="custom-filelabel" for="picture">Choose Image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Fullname</label>
                                    <input type="text" class="form-control" id="txtfullname" name="fullname"
                                        placeholder="Input fullname" value="<?php echo e($c->fullname); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Phone</label>
                                    <input type="text" class="form-control" id="txttel" name="tel"
                                        placeholder="Input tel" value="<?php echo e($c->tel); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Address</label>
                                    <input type="text" class="form-control" id="txtaddress" name="address"
                                        placeholder="Input address" value="<?php echo e($c->tel); ?>">
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Update</button>
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

<?php echo $__env->make('layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/admin/customer/customer_update.blade.php ENDPATH**/ ?>