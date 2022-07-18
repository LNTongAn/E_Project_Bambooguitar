<!-- lưu tại /resources/views/product/create.blade.php -->

<?php $__env->startSection('title', 'admin'); ?>
<?php $__env->startSection('content_admin'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Update order number <?php echo e($o->id); ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo e(url('admin/order/PostUpdateOrder/' . $o->id)); ?>" method="post"
                            enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">Order Id</label>
                                    <input type="text" class="form-control" id="txtid" name="id" placeholder="1"
                                        value="<?php echo e($o->id); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Member Id</label>
                                    <input type="text" class="form-control" id="txtmember_id" name="memberId"
                                        placeholder="" value="<?php echo e($o->member_id); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Date</label>
                                    <input type="text" class="form-control" id="txtdate" name="date" placeholder=""
                                        value="<?php echo e($o->date); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <?php
                                        $disable = $o->status == 'waiting' ? '' : 'disabled';
                                    ?>
                                    <label for="txt-price">Status</label>
                                    <select class="form-control" id="txtstatus" name="status" <?php echo e($disable); ?>>
                                        <?php if($o->status == 'waiting'): ?>
                                            <option value="waiting" selected>waiting</option>
                                            <option value="confirm">confirm</option>
                                        <?php else: ?>
                                            <option value="waiting">waiting</option>
                                            <option value="confirm" selected>confirm</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Shipping name</label>
                                    <input type="text" class="form-control" name="shipping_name" placeholder="Enter ..."
                                        value="<?php echo e($o->shipping_name); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Shipping mobile</label>
                                    <input type="number" class="form-control" name="shipping_mobile"
                                        placeholder="Enter ..." value="<?php echo e($o->shipping_mobile); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Shipping email</label>
                                    <input type="text" class="form-control" name="shipping_email"
                                        value="<?php echo e($o->shipping_email); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Shipping_address</label>
                                    <input type="text" class="form-control" name="shipping_address"
                                        value="<?php echo e($o->shipping_address); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>payment_method</label>
                                    <?php if($o->payment_term == 0): ?>
                                        <input type="text" class="form-control" name="" value="Cash" readonly>
                                        <input type="hidden" class="form-control" name="payment_term" value="0"
                                            readonly>
                                    <?php else: ?>
                                        <input type="text" class="form-control" name="" value="Online" readonly>
                                        <input type="hidden" class="form-control" name="payment_term" value="1"
                                            readonly>
                                    <?php endif; ?>

                                </div>
                                <?php if(session('user')->role == 2): ?>
                                <div class="form-group">
                                    <label for="txt-category">Staff id</label>
                                    <select class="form-control" name="staff_id" id="txtstaff_id" required>
                                        <?php if($o->staff_id == null): ?>
                                            <option></option>
                                            <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($s->username); ?>"><?php echo e($s->username); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <option value="<?php echo e($o->staff_id); ?>"><?php echo e($o->staff_id); ?></option>
                                            <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($s->username != $o->staff_id): ?>
                                                    <option value="<?php echo e($s->username); ?>"><?php echo e($s->username); ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <?php else: ?>
                                <input type="hidden" name="staff_id" id="txtstaff_id" value="<?php echo e($o->staff_id); ?>">
                                <?php endif; ?>
                                <div class="form-group">
                                    <label>Delivered date</label>
                                    <input type="date" class="form-control" name="delivered_date"
                                        value="<?php echo e($o->delivered_date); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Shipping fee</label>
                                    <input type="text" class="form-control" name="shipping_fee"
                                        value="<?php echo e($o->shipping_fee); ?>">
                                </div>
                                <table class="table table-hover">
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                    <?php $__currentLoopData = $order_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($oi->name); ?></td>
                                            <td><img width="100px" src="<?php echo e(url('images/' . $oi->image)); ?>" /></td>
                                            <td><?php echo e($oi->qty); ?></td>
                                            <td><?php echo e($oi->price); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td colspan="3">Total</td>
                                        <td>$ <?php echo e($o->total_amount); ?></td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
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

<?php echo $__env->make('layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/admin/order/order_update.blade.php ENDPATH**/ ?>