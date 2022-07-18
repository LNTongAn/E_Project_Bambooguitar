<?php $__env->startSection('title', 'admin'); ?>
<?php $__env->startSection('content_admin'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Staff - demo</h1>
                </div>
                
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <span style="float: left; font-size:larger">Staff Management Panel</span>
                        <table id="product" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Role</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($s->username); ?></td>
                                        <td><?php echo e($s->role); ?></td>
                                        
                                        <td class="text-right">
                                            <?php if($s->active == 1): ?>
                                                <a class="btn btn-success btn-sm"
                                                    href="<?php echo e(url('admin/staff/lockStaff/' . $s->username)); ?>">
                                                    <i class="fas fa-unlock"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if($s->active == 2): ?>
                                                <a class="btn btn-warning btn-sm"
                                                    href="<?php echo e(url('admin/staff/lockStaff/' . $s->username)); ?>">
                                                    <i class="fas fa-lock"></i>
                                                </a>
                                            <?php endif; ?>

                                            <a class="btn btn-info btn-sm"
                                                href="<?php echo e(url('admin/staff/staff_update/' . $s->username)); ?>">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm"
                                                href="<?php echo e(url('admin/staff/deleteStaff/' . $s->username)); ?>">
                                                <i class="fas fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
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
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/admin/staff/staff_index.blade.php ENDPATH**/ ?>