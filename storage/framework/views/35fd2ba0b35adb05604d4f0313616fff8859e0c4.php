<?php $__env->startSection('title', 'admin'); ?>
<?php $__env->startSection('content_admin'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order - demo</h1>
                </div>
                
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!--ORDER WAITING-->
    
    <?php if(session('user')->role == 2): ?>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <span style="float: left; font-size:larger">Manage unconfirmed orders</span>
                        <table id="product" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order_id</th>
                                    <th>Member_id</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total_amount</th>
                                    <th>Shipping_name</th>
                                    <th>Shipping_mobile</th>
                                    <th>Shipping_email</th>
                                    <th>Shipping_address</th>
                                    <th>Payment_term</th>
                                    <th>Staff_id</th>
                                    <th>Delivered_date</th>
                                    <th>Shipping_fee</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($o->status == 'waiting'): ?>
                                        <tr>
                                            <td><?php echo e($o->id); ?></td>
                                            <td><?php echo e($o->member_id); ?></td>
                                            <td><?php echo e($o->date); ?></td>
                                            <td><b><?php echo e($o->status); ?></b></td>
                                            <td><?php echo e($o->total_amount); ?></td>
                                            <td><?php echo e($o->shipping_name); ?></td>
                                            <td><?php echo e($o->shipping_mobile); ?></td>
                                            <td><?php echo e($o->shipping_email); ?></td>
                                            <td><?php echo e($o->shipping_address); ?></td>
                                            <td>
                                                <?php if($o->payment_term == 0): ?>
                                                    cash
                                                <?php else: ?>
                                                    online
                                                <?php endif; ?>
                                                
                                            </td>
                                            <td><?php echo e($o->staff_id); ?></td>
                                            <td><?php echo e($o->delivered_date); ?></td>
                                            <td><?php echo e($o->shipping_fee); ?></td>
                                            <td class="text-right">
                                                <a class="btn btn-info btn-sm"
                                                    href="<?php echo e(url('admin/order/order_update/' . $o->id)); ?>">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>

                                                <a class="btn btn-danger btn-sm"
                                                    href="<?php echo e(url('admin/order/order_delete/' . $o->id)); ?>">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>


                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>

                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <?php endif; ?>
    

    <!--ORDER CONFIRM-->

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <span style="float: left; font-size:larger">Manage confirmed orders</span>
                        <table id="product2" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order_id</th>
                                    <th>Member_id</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total_amount</th>
                                    <th>Shipping_name</th>
                                    <th>Shipping_mobile</th>
                                    <th>Shipping_email</th>
                                    <th>Shipping_address</th>
                                    <th>Payment_term</th>
                                    <th>Staff_id</th>
                                    <th>Delivered_date</th>
                                    <th>Shipping_fee</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <?php if($o->status == 'confirm' && session('user')->role == 2): ?>
                                        <tr>
                                            <td><?php echo e($o->id); ?></td>
                                            <td><?php echo e($o->member_id); ?></td>
                                            <td><?php echo e($o->date); ?></td>
                                            <td><b><?php echo e($o->status); ?></b></td>
                                            <td><?php echo e($o->total_amount); ?></td>
                                            <td><?php echo e($o->shipping_name); ?></td>
                                            <td><?php echo e($o->shipping_mobile); ?></td>
                                            <td><?php echo e($o->shipping_email); ?></td>
                                            <td><?php echo e($o->shipping_address); ?></td>
                                            <td>
                                                <?php if($o->payment_term == 0): ?>
                                                    cash
                                                <?php else: ?>
                                                    online
                                                <?php endif; ?>
                                                
                                            </td>
                                            <td><?php echo e($o->staff_id); ?></td>
                                            <td><?php echo e($o->delivered_date); ?></td>
                                            <td><?php echo e($o->shipping_fee); ?></td>
                                            <td class="text-right">
                                                <a class="btn btn-info btn-sm"
                                                    href="<?php echo e(url('admin/order/order_update/' . $o->id)); ?>">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm"
                                                    href="<?php echo e(url('admin/order/order_delete/' . $o->id)); ?>">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>

                                            </td>
                                        </tr>
                                    <?php endif; ?>

                                    <!--STAFF-->
                                    
                                    <?php if($o->status == 'confirm' && session('user')->role == 1 && session('user')->username == $o->staff_id): ?>
                                        <tr>
                                            <td><?php echo e($o->id); ?></td>
                                            <td><?php echo e($o->member_id); ?></td>
                                            <td><?php echo e($o->date); ?></td>
                                            <td><b><?php echo e($o->status); ?></b></td>
                                            <td><?php echo e($o->total_amount); ?></td>
                                            <td><?php echo e($o->shipping_name); ?></td>
                                            <td><?php echo e($o->shipping_mobile); ?></td>
                                            <td><?php echo e($o->shipping_email); ?></td>
                                            <td><?php echo e($o->shipping_address); ?></td>
                                            <td>
                                                <?php if($o->payment_term == 0): ?>
                                                    cash
                                                <?php else: ?>
                                                    online
                                                <?php endif; ?>
                                                
                                            </td>
                                            <td><?php echo e($o->staff_id); ?></td>
                                            <td><?php echo e($o->delivered_date); ?></td>
                                            <td><?php echo e($o->shipping_fee); ?></td>
                                            <td class="text-right">
                                                <a class="btn btn-info btn-sm"
                                                    href="<?php echo e(url('admin/order/order_update/' . $o->id)); ?>">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm"
                                                    href="<?php echo e(url('admin/order/order_delete/' . $o->id)); ?>">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>

                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                            <tfoot>
                                <tr>

                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <style>
        .card {
            width: 1000px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>
    <script>
        $(function() {
            $('#product').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "scrollY": 300,
                "scrollX": true
            });
        });

        $(function() {
            $('#product2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "scrollY": 300,
                "scrollX": true
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/admin/order/order_index.blade.php ENDPATH**/ ?>