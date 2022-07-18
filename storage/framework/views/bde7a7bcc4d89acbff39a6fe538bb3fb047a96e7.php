<?php $__env->startSection('title', 'OrganicFood'); ?>
<?php $__env->startSection('content'); ?>
    <nav class="grid wide">
        <div class="row">
            <div class="col l-4 m-0 c-0">
                <div class="product_detail">
                    <img class="img_product_detail" src="<?php echo e(url('images/' . $p->image)); ?>" alt="">
                </div>
            </div>
            <div class=" l-8 m-12 c-12">
                <div class="product_detail">
                    <h1 class="product_detail_title"><?php echo e($p->name); ?></h1>
                    <h2 class="product_detail_price"><?php echo e($p->price); ?> $</h2>
                    <h2 class="product_detail_quanity">Quanity: <input style="border-color:#33CC33; border-radius:15px;"
                            inputmode="numeric" class="form-filter" type="number" value="1" min="1"
                            max="<?php echo e($p->inventory_qty); ?>"></h2>
                    <div>
                        <button onclick="location.href=`<?php echo e(url('home/add-to-cart/' . $p->id)); ?>`"
                            class="product_detail_button">Add to cart <span
                                class="glyphicon glyphicon-shopping-cart"></button>
                        <button class="product_detail_button">Check out <span
                                class="glyphicon glyphicon-check"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="bg_white_container">
            <h3 class="product_detail_description_title">Description</h3>
            <hr>
            <h4 class="product_detail_description_content">
                <?php echo $p->description; ?>

            </h4>
        </div>

        <br>

        <div class="bg_white_container">
            <h3 class="product_detail_description_title">Customer Feedback</h3>
            <hr>

            
            <?php if($fbn == null): ?>
                <div style="text-align: center;">
                    <h4 style="color: silver">There are no reviews for this product yet.</h4>
                </div>
            <?php endif; ?>

            
            <?php $__currentLoopData = $fb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="media">
                    <div class="media-left">
                        <img src="<?php echo e(url('member/img/' . $f->picture)); ?>" class="media-object"
                            style="width:45px; border-radius:50%;">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo e($f->fullname); ?> <small><i><?php echo e($f->created_date); ?></i></small></h4>
                        <p style="background-color: #eee; display:table; padding: 10px 12px 10px 12px; border-radius:15px;">
                            <?php echo e($f->comment); ?></p>

                        <!-- Nested media object -->
                        
                        
                        <?php if($f->reply != null): ?>
                            <div class="media">
                                <li style="list-style-type: none;">
                                    <div class="media-left">
                                        <img src="<?php echo e(url('admin/img/img_avatar.png')); ?>" class="media-object"
                                            style="width:45px; border-radius:50%;">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo e($f->staff_id); ?>

                                            <small><i><?php echo e($f->created_DateRep); ?></i></small></h4>
                                        <p
                                            style="background-color: #eee; display:table; padding: 10px 12px 10px 12px; border-radius:15px;">
                                            <?php echo e($f->reply); ?></p>
                                    </div>
                                </li>
                            </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>


        
        <?php
            use Carbon\Carbon;
            $mytime = Carbon::now();
        ?>
        
        <?php if(session('member')): ?>
            <br>
            <div class="bg_white_container">
                <form action="<?php echo e(url('home/productDetail/PostFeedbackMember/' . $p->id)); ?>">
                    <div class="form-group">
                        <label for="">Feedback</label>
                        
                        <div class="media">
                            <div class="media-left">
                                <img style="border-radius:50%"
                                    src="<?php echo e(url('member/img/' . session('member')->picture)); ?>" class="media-object"
                                    width="45px">
                            </div>
                            
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo e(session('member')->fullname); ?><small>
                            </div>
                            <br>
                        </div>
                        
                        
                        
                        <input class="form-control" type="hidden" name="member_id" id="member_id"
                            value="<?php echo e(session('member')->id); ?>">
                        
                        <input type="hidden" name="created_date" id="created_date" value="<?php echo e($mytime); ?>">
                        
                        <input class="form-control" type="text" name="feedback" id="feedback" required>

                    </div>
                    
                    <button style="padding: 5px 10px 5px 10px; border-radius:15px;" class="btn-success"><i
                            class="glyphicon glyphicon-send"></i> Send</button>
                </form>
            </div>
        <?php endif; ?>
    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-sem2\resources\views/home/productDetail.blade.php ENDPATH**/ ?>