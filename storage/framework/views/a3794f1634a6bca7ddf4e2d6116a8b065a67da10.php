<?php $__env->startSection('title', 'admin'); ?>
<?php $__env->startSection('content_admin'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products - eloquent demo</h1>
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
                        <span style="float: left; font-size:larger">Product Management Panel</span>
                        <table id="product" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>description</th>
                                    <th>category_id</th>
                                    <th>image</th>
                                    <th>inventory_qty</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($p->id); ?></td>
                                        <td><?php echo e($p->name); ?></td>
                                        <td><?php echo e($p->price); ?></td>
                                        <td><?php echo e($p->description); ?></td>
                                        <td><?php echo e($p->category_id); ?></td>
                                        <td><img width="100px" src="<?php echo e(url('images/' . $p->image)); ?>" /></td>
                                        <td><?php echo e($p->inventory_qty); ?></td>
                                        <td class="text-right">
                                            
                                            <a class="btn btn-info btn-sm"
                                                href="<?php echo e(url('admin/product/update/' . $p->id)); ?>">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                            <?php if(session('user')->role == 2): ?>
                                                <a class="btn btn-danger btn-sm"
                                                    href="<?php echo e(url('admin/product/delete/' . $p->id)); ?>">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>
                                            <?php endif; ?>
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

<?php echo $__env->make('layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/admin/product/index.blade.php ENDPATH**/ ?>