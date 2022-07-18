<?php $__env->startSection('title', 'admin'); ?>
<?php $__env->startSection('content_admin'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Feedback - demo</h1>
                </div>
                
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!--CUSTOMER NOT YET REPLY-->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <span style="float: left; font-size:larger">Manage not answered customer</span>
                        <table id="product" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product_id</th>
                                    <th>Member_id</th>
                                    <th>Create_date</th>
                                    <th>Comment</th>
                                    <th>Staff_id</th>
                                    <th>Reply</th>
                                    <th>Time Reply</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $feedback; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($f->reply == null): ?>
                                        <tr>
                                            <td><?php echo e($f->id); ?></td>
                                            <td><?php echo e($f->product_id); ?></td>
                                            <td><?php echo e($f->member_id); ?></td>
                                            <td><?php echo e($f->created_date); ?></td>
                                            <td><?php echo e($f->comment); ?></td>
                                            <td><?php echo e($f->staff_id); ?></td>
                                            <td><?php echo e($f->reply); ?></td>
                                            <td><?php echo e($f->created_DateRep); ?></td>
                                            <td class="text-right">
                                                <a class="btn btn-info btn-sm"
                                                    href="<?php echo e(url('admin/feedback/feedback_reply/' . $f->id)); ?>">
                                                    <i class="fas fa-pencil-alt"></i> Reply
                                                </a>

                                                <?php if(session('user')->role == 2): ?>
                                                    <a class="btn btn-danger btn-sm" href="<?php echo e(url('admin/feedback/deleteFeedback/' . $f->id)); ?>">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                <?php endif; ?>


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
    

    <!--BẢNG REPLY CUSTOMER-->

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <span style="float: left; font-size:larger">Manage reply customer</span>
                        <table id="product2" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product_id</th>
                                    <th>Member_id</th>
                                    <th>Create_date</th>
                                    <th>Comment</th>
                                    <th>Staff_id</th>
                                    <th>Reply</th>
                                    <th>Time reply</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $feedback; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($f->reply != null): ?>
                                        <tr>
                                            <td><?php echo e($f->id); ?></td>
                                            <td><?php echo e($f->product_id); ?></td>
                                            <td><?php echo e($f->member_id); ?></td>
                                            <td><?php echo e($f->created_date); ?></td>
                                            <td><?php echo e($f->comment); ?></td>
                                            <td><?php echo e($f->staff_id); ?></td>
                                            <td><?php echo e($f->reply); ?></td>
                                            <td><?php echo e($f->created_DateRep); ?></td>
                                            <td class="text-right">
                                                <a class="btn btn-info btn-sm"
                                                    href="<?php echo e(url('admin/feedback/feedback_reply/' . $f->id)); ?>">
                                                    <i class="fas fa-pencil-alt"></i> Reply
                                                </a>
                                                <?php if(session('user')->role == 2): ?>
                                                    <a class="btn btn-danger btn-sm" href="<?php echo e(url('admin/feedback/deleteFeedback/' . $f->id)); ?>">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                <?php endif; ?>

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

<?php echo $__env->make('layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/admin/feedback/feedback_index.blade.php ENDPATH**/ ?>