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
                    <?php
                        use Carbon\Carbon;
                        $mytime = Carbon::now();
                    ?>
                    <div class="card card-success shadow">
                        <div class="card-header">
                            <h3 class="card-title">Reply feedback</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo e(url('admin/feedback/PostReplyFeedback/' . $f->id)); ?>" method="post"
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
                                        value="<?php echo e($f->id); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Product ID</label>
                                    <input type="number" class="form-control" id="txtproductid" name="product_id"
                                        value="<?php echo e($f->product_id); ?>" readonly>
                                </div>
                                <table class="table table-hover">
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo e($pf->name); ?></td>
                                        <td><img src="<?php echo e(url('images/' . $pf->image)); ?>" alt="" width="100px">
                                        </td>
                                        <td><?php echo e($pf->price); ?></td>
                                    </tr>
                                </table>
                                <div class="form-group">
                                    <label for="txt-name">Member ID</label>
                                    <input type="text" class="form-control" id="txtmemberid" name="member_id"
                                        value="<?php echo e($f->member_id); ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="txt-name">Feedback</label>
                                    <input type="text" class="form-control" id="txtcomment" name="comment" placeholder=""
                                        value="<?php echo e($f->comment); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Staff ID</label>
                                    <input type="text" class="form-control" id="txtstaffid" name="staff_id"
                                        placeholder="" value="<?php echo e(session('user')->username); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Reply</label>
                                    <input type="text" class="form-control" id="txtreply" name="reply"
                                        placeholder="Input reply" value="<?php echo e($f->reply); ?>">
                                    
                                    <input type="hidden" name="created_DateRep" value="<?php echo e($mytime); ?>">
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Reply</button>
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

<?php echo $__env->make('layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/admin/feedback/feedback_reply.blade.php ENDPATH**/ ?>