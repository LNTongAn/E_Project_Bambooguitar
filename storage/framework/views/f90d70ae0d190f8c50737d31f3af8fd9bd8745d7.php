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
                            <span class="content_profile">Order History</span>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <a class="content_profile_F" href="<?php echo e(url('home/changePass/' . session('member')->id)); ?>">
                                <span class="">Change password</span></a>
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
        <br>

        <?php if(session('alert')): ?>
            <span class="alert alert-success" style="color: green">
                <?php echo e(session('alert')); ?>

            </span><br><br>
        <?php endif; ?>

        <!--ORDER HISTORY-->
        <table class="table table-hover bg_white_container">
            <tr style="background-color:#33CC33; color:#eee">
                <th>ID</th>
                <th>Status</th>
                <th>Date</th>
                <th>Total amount</th>
                <th>Address</th>
                <th>Payment term</th>
                <th>Delivered_date</th>
                <th></th>
            </tr>
            <!--THÔNG TIN LỊCH SỬ ĐÃ ORDER-->
            <?php $__currentLoopData = $o; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($oh->id); ?></td>
                    <td><b><?php echo e($oh->status); ?></b></td>
                    <td><?php echo e($oh->date); ?></td>
                    <td><?php echo e($oh->total_amount); ?></td>
                    <td><?php echo e($oh->shipping_address); ?></td>
                    <td>
                        <?php if($oh->payment_term == 0): ?>
                            Cash
                        <?php else: ?>
                            Online
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($oh->delivered_date); ?></td>
                    <td>
                        <button style="padding: 5px 10px 5px 10px; border-radius:15px;" class="btn-success"
                            data-toggle="modal" data-target="#myModal<?php echo e($oh->id); ?>">
                            <i class="glyphicon glyphicon-eye-open"></i> Order detail</button>
                        <?php if($oh->status == 'waiting'): ?>
                            <button onclick="location.href=`<?php echo e(url('home/deleteOrder/' . $oh->id)); ?>`"
                                style="padding: 5px 10px 5px 10px; border-radius:15px;" class="btn-danger">
                                <i class="glyphicon glyphicon-trash"></i> Cancellation</button>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </nav>

    <!--ORDER DETAIL MODAL-->
    <?php $__currentLoopData = $o; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="myModal<?php echo e($oh->id); ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Order detail</h4>
                    </div>
                    <div class="modal-body">
                        <!--THÔNG TIN ORDER-->
                        <h4>Order information</h4>
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Total amount</th>
                                <th>Address</th>
                                <th>Payment term</th>
                                <th>Delivered_date</th>
                            </tr>
                            <tr>
                                <td><?php echo e($oh->id); ?></td>
                                <td><?php echo e($oh->status); ?></td>
                                <td><?php echo e($oh->date); ?></td>
                                <td><?php echo e($oh->total_amount); ?></td>
                                <td><?php echo e($oh->shipping_address); ?></td>
                                <td>
                                    <?php if($oh->payment_term == 0): ?>
                                        Cash
                                    <?php else: ?>
                                        Online
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($oh->delivered_date); ?></td>
                            </tr>
                        </table>
                        <hr>
                        <!--THÔNG TIN SẢN PHẨM ĐÃ ORDER-->
                        <h4>Ordered product information</h4>
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                            <?php $__currentLoopData = $oi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!--KIỂM TRA DỰA VÀO PK VÀ FK,
                                LẤY SẢN PHẨM ĐANG CÓ order_id THEO ĐƠN HÀNG-->
                                <?php if($oh->id == $oid->order_id): ?>
                                    <tr>
                                        <td><?php echo e($oid->product_id); ?></td>
                                        <td><?php echo e($oid->name); ?></td>
                                        <td>
                                            <img src="<?php echo e(url('images/' . $oid->image)); ?>" alt="" width="100"
                                                height="100">
                                        </td>
                                        <td><?php echo e($oid->qty); ?></td>
                                        <td>$ <?php echo e($oid->price); ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="4">Total</td>
                                <td>$ <?php echo e($oh->total_amount); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <style>

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-sem2\resources\views/home/orderHistory.blade.php ENDPATH**/ ?>