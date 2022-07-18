<!-- lưu tại /resources/views/product/create.blade.php -->

<?php $__env->startSection('title', 'admin'); ?>
<?php $__env->startSection('content_admin'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update <?php echo e($p->name); ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="<?php echo e(url('admin/postUpdate/'.$p->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Produc Id</label>
                                <input type="text" class="form-control" id="txtid" name="id" placeholder="1" value="<?php echo e($p->id); ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Produc Name</label>
                                <input type="text" class="form-control" id="txtname" name="name" placeholder="Input Product Name" value="<?php echo e($p->name); ?>">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Produc Price</label>
                                <input type="text" class="form-control" id="txtprice" name="price" placeholder="1" value="<?php echo e($p->price); ?>">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description" placeholder="Enter ..." ><?php echo e($p->description); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="txt-category">Category_id</label>
                                <input type="number" class="form-control" id="txtcategoryid" name="category_id" placeholder="1" value="<?php echo e($p->category_id); ?>">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <img class="img-fluid" src="<?php echo e(url('images/'.$p->image)); ?>" />
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-fileinput" id="image" name="image">
                                        <label class="custom-filelabel" for="image">Choose Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txt-inventory">inventory_qty</label>
                                <input type="number" class="form-control" id="txtinventory" name="inventory_qty" placeholder="1" value="<?php echo e($p->inventory_qty); ?>">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>
<script src="<?php echo e(asset('admin/plugins/bs-custom-file-input/bs-custom-fileinput.min.js')); ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/admin/update.blade.php ENDPATH**/ ?>