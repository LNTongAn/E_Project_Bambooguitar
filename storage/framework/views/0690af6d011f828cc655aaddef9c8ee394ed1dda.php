<!-- lưu tại /resources/views/product/create.blade.php -->

<?php $__env->startSection('title', 'admin'); ?>
<?php $__env->startSection('content_admin'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-success shadow">
                        <div class="card-header">
                            <h3 class="card-title">Create Blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php
                            use Carbon\Carbon;
                            $mytime = Carbon::now();
                        ?>
                        <form role="form" action="<?php echo e(url('admin/blog/PostBlogCreate')); ?>" method="post"
                            enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="card-body">
                                <!-- <div class="form-group">
                                        <label for="txt-id">Produc Id</label>
                                        <input type="text" class="form-control" id="txtid" name="id" placeholder="1">
                                    </div> -->
                                <div class="form-group">
                                    <label for="txt-topic">Topic</label>
                                    <input type="text" class="form-control" id="txttopic" name="topic"
                                        placeholder="Input topic">
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea class="form-control" rows="3" name="content" placeholder="Enter ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-fileinput" id="image" name="image">
                                            <label class="custom-filelabel" for="image">Choose Image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txt-date">Date</label>
                                    <input type="text" class="form-control" id="txtdate" name="date"
                                        value="<?php echo e($mytime); ?>" readonly>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Create</button>
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

<?php echo $__env->make('layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/admin/blog/blog_create.blade.php ENDPATH**/ ?>