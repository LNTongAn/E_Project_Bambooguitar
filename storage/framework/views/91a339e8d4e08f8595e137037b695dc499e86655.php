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
                                class="content_profile_F"><span>Profile</span></a>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <a href="<?php echo e(url('home/orderHistory/' . session('member')->id)); ?>"
                                class="content_profile_F"><span>Order History</span></a>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <a href="<?php echo e(url('home/changePass/' . session('member')->id)); ?>"
                                class="content_profile_F"><span>Change pass</span></a>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <span class="content_profile">History Feedback</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div style="border-bottom: 1px solid; margin-top:30px"></div>
        <br>
        <table class="table table-hover bg_white_container">
            <tr style="background-color:#33CC33; color:#eee">
                <th>Product ID</th>
                <th>Created date</th>
                <th>Feedback</th>
                <th>Staff reply</th>
                <th>Reply</th>
                <th>Date reply</th>
                <th></th>
            </tr>
            <!--THÔNG TIN LỊCH SỬ ĐÃ FEEDBACK-->
            <?php $__currentLoopData = $feedback; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($f->product_id); ?></td>
                    <td><?php echo e($f->created_date); ?></td>
                    <td><?php echo e($f->comment); ?></td>
                    <td><?php echo e($f->staff_id); ?></td>
                    <td><?php echo e($f->reply); ?></td>
                    <td><?php echo e($f->created_DateRep); ?></td>
                    <td>
                        <button style="padding: 5px 10px 5px 10px; border-radius:15px;" class="btn-success"
                            data-toggle="modal" data-target="#myModal<?php echo e($f->id); ?>">
                            <i class="glyphicon glyphicon-eye-open"></i> Feedback detail</button>
                        
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </nav>
    <!--FEEDBACK DETAIL MODAL-->
    <?php $__currentLoopData = $feedback; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="myModal<?php echo e($f->id); ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Feedback detail</h4>
                    </div>
                    <div class="modal-body">
                        <!--THÔNG TIN FEEDBACK-->
                        <h4>Feedback</h4>
                        <table class="table table-hover">
                            <tr>
                                <th>Product ID</th>
                                <th>Created date</th>
                                <th>Feedback</th>
                                <th>Staff reply</th>
                                <th>Reply</th>
                                <th>Date reply</th>
                            </tr>
                            <tr>
                                <td><?php echo e($f->product_id); ?></td>
                                <td><?php echo e($f->created_date); ?></td>
                                <td><?php echo e($f->comment); ?></td>
                                <td><?php echo e($f->staff_id); ?></td>
                                <td><?php echo e($f->reply); ?></td>
                                <td><?php echo e($f->created_DateRep); ?></td>
                            </tr>
                        </table>
                        <hr>
                        <!--THÔNG TIN SẢN PHẨM ĐÃ FEEDBACK-->
                        <h4>The product you have commented on</h4>
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                            </tr>
                            <?php $__currentLoopData = $productfb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!--KIỂM TRA DỰA VÀO PK VÀ FK,
                                            LẤY SP CÓ PRODUCT_ID-->
                                <?php if($f->product_id == $pf->id): ?>
                                    <tr>
                                        <td><?php echo e($pf->id); ?></td>
                                        <td><?php echo e($pf->name); ?></td>
                                        <td>
                                            <img src="<?php echo e(url('images/' . $pf->image)); ?>" alt="" width="100"
                                                height="100">
                                        </td>
                                        <td>$ <?php echo e($pf->price); ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table><hr>
                        <a href="<?php echo e(url('home/productDetail/'.$f->product_id)); ?>">Come see feedback -></a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/home/feedback.blade.php ENDPATH**/ ?>