
<?php $__env->startSection('title', 'OrganicFood'); ?>
<?php $__env->startSection('content'); ?>

<nav class="grid wide">
    <div class="row">
        <div class="col l-2 m-0 c-0">
            <div class="filter_product">
                
                <form action="<?php echo e(url('home/product/findPrice/'.$tle->id)); ?>" method="get">
                    <h4 style="padding-top: 20px; margin-left:16px; ">Price:</h4>
                    <h4><input name="price1" id="price1" type="text" class="form-filter form-control"></h4>
                    <h4 style="margin-left:16px; ">to</h4>
                    <h4><input name="price2" id="price2" type="text" class="form-filter form-control"></h4>
                    <h4><button class="filter_button">Find</button></h4>
                </form>

            </div>
        </div>
        <div class="col l-10 m-12 c-12">
            <div class="content">
                <div class="title_product_2">
                    <?php echo e($tle->name); ?>

                </div>
                <!-- alert cart -->
                <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>

                <div style="border-bottom:1px solid;"></div>
                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col l-2-4 m-4 c-12">
                        <div class="item_product">
                            <div class="cart_index">
                                <img class="img_product" src="<?php echo e(url('images/'.$p->image)); ?>" alt="">
                                <button onclick="location.href=`<?php echo e(url('home/add-to-cart/'.$p->id)); ?>`" class="button_product_2"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </div>
                            <br>
                            <h4 class="title_product"><a href="<?php echo e(url('home/productDetail/'.$p->id)); ?>"><?php echo e($p->name); ?></a></h4>
                            <h3 class="price_product"><?php echo e($p->price); ?> $</h3>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>          

            </div>
        </div>
    </div>
    <div class="link_phan_trang"><?php echo e($products -> links()); ?></div>
</nav>
<style>
    .relative{
        background-color: none;
        padding: 20px 10px 20px 10px;
        margin: 0 20px 0 20px;
        border-radius: 20px;  
        color:#33CC33;
    }

    .relative:hover{
        background-color: #33CC33;
        color:#fff; 
        transition: 0.1s;
        text-decoration: none;
    }
    
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/home/product.blade.php ENDPATH**/ ?>