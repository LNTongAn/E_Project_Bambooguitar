<?php $__env->startSection('title', 'OrganicFood'); ?>
<?php $__env->startSection('content'); ?>
    <nav class="container">
        <div class="bg-white ">
            <div class="row">
                <div class="col-sm-3">
                    <div class="subnav-header">
                        <button class="subnavbtn" disabled><i class="fa fa-bars"></i> List of products</button>
                    </div>
                    <div class="navbar-list">

                        <div class="subnav">
                            <button onclick="location.href=`<?php echo e(url('home/product/1')); ?>`"
                                class="subnavbtn">Vegetable</button>

                        </div>
                        <div class="subnav">
                            <button onclick="location.href=`<?php echo e(url('home/product/2')); ?>`" class="subnavbtn">Fresh
                                food</button>

                        </div>
                        <div class="subnav">
                            <button onclick="location.href=`<?php echo e(url('home/product/3')); ?>`" class="subnavbtn">Dry food
                            </button>

                        </div>
                        <div class="subnav">
                            <button onclick="location.href=`<?php echo e(url('home/product/4')); ?>`" class="subnavbtn">Convenience
                                food</button>
                        </div>
                        <div class="subnav">
                            <button onclick="location.href=`<?php echo e(url('home/product/5')); ?>`" class="subnavbtn">Organic fruit
                            </button>

                        </div>
                        <div class="subnav">
                            <button onclick="location.href=`<?php echo e(url('home/product/6')); ?>`" class="subnavbtn">Spices and
                                ingredients </button>

                        </div>



                    </div>
                </div>
                <div class="col-sm-9">

                    <div style="border-radius: 15px;" id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo e(asset('img/carousel1.jpg')); ?>" alt=""
                                    style="width:100%; height:350px; border-radius: 15px;">
                            </div>

                            <div class="item">
                                <img src="<?php echo e(asset('img/carousel2.jpg')); ?>" alt=""
                                    style="width:100%; height:350px; border-radius: 15px;">
                            </div>

                            <div class="item">
                                <img src="<?php echo e(asset('img/carousel3.jpg')); ?>" alt=""
                                    style="width:100%; height:350px; border-radius: 15px;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a style="border-radius: 15px;" class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a style="border-radius: 15px;" class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </nav><br>

    <!-- <br><br><div style="border-top: 1px solid; border-color:#828282;"></div> -->

    <div class="container">
        <div class="img-main-mid-home">
            <div class="img-mid-home">
                <img class="hover-img" src="<?php echo e(asset('img/raucuqua.jpg')); ?>" alt=""><br>
                <span>Vegetable</span>
            </div>
            <div class="img-mid-home">
                <img class="hover-img" src="<?php echo e(asset('img/traicay.jpg')); ?>" alt=""><br>
                <span>Fruit</span>
            </div>
            <div class="img-mid-home">
                <img class="hover-img" src="<?php echo e(asset('img/nam.jpg')); ?>" alt=""><br>
                <span>Mushroom</span>
            </div>
            <div class="img-mid-home">
                <img class="hover-img" src="<?php echo e(asset('img/ngucoc.jpg')); ?>" alt=""><br>
                <span>Cereal</span>
            </div>
            <div class="img-mid-home">
                <img class="hover-img" src="<?php echo e(asset('img/nuoi.jpg')); ?>" alt=""><br>
                <span>Noodles</span>
            </div>
        </div>
    </div><br><br>

    <!-- <br><br><div style="border-top: 1px solid; border-color:#828282;"></div> -->

    
    <div class="container bg_white_container">
        <h1>Some vegetable products</h1>
        <hr>
        <div class="grid wide">
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col l-3 m-6 c-12">
                        <div class="item_product">
                            <div class="cart_index">
                                <img class="img_product" src="<?php echo e(url('images/' . $p->image)); ?>" alt="">
                                <button onclick="location.href=`<?php echo e(url('home/add-to-cart/' . $p->id)); ?>`"
                                    class="button_product"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </div>
                            <br>
                            <h4 class="title_product"><a
                                    href="<?php echo e(url('home/productDetail/' . $p->id)); ?>"><?php echo e($p->name); ?></a></h4>
                            <h3 class="price_product"><?php echo e($p->price); ?> $</h3>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        <hr>
        <button onclick="location.href=`<?php echo e(url('home/product/1')); ?>`" class="view_all_button">View all</button>
    </div>

    <br>
    
    <div class="container bg_white_container">
        <h1>Some Fresh food products</h1>
        <hr>
        <div class="grid wide">
            <div class="row">
                <?php $__currentLoopData = $product2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col l-3 m-6 c-12">
                        <div class="item_product">
                            <div class="cart_index">
                                <img class="img_product" src="<?php echo e(url('images/' . $p->image)); ?>" alt="">
                                <button onclick="location.href=`<?php echo e(url('home/add-to-cart/' . $p->id)); ?>`"
                                    class="button_product"><span
                                        class="glyphicon glyphicon-shopping-cart"></span></button>
                            </div>
                            <br>
                            <h4 class="title_product"><a
                                    href="<?php echo e(url('home/productDetail/' . $p->id)); ?>"><?php echo e($p->name); ?></a></h4>
                            <h3 class="price_product"><?php echo e($p->price); ?> $</h3>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        <hr>
        <button onclick="location.href=`<?php echo e(url('home/product/2')); ?>`" class="view_all_button">View all</button>
    </div>

    <br>
    
    <div class="container bg_white_container">
        <h1>Some Dry food products</h1>
        <hr>
        <div class="grid wide">
            <div class="row">
                <?php $__currentLoopData = $product3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col l-3 m-6 c-12">
                        <div class="item_product">
                            <div class="cart_index">
                                <img class="img_product" src="<?php echo e(url('images/' . $p->image)); ?>" alt="">
                                <button onclick="location.href=`<?php echo e(url('home/add-to-cart/' . $p->id)); ?>`"
                                    class="button_product"><span
                                        class="glyphicon glyphicon-shopping-cart"></span></button>
                            </div>
                            <br>
                            <h4 class="title_product"><a
                                    href="<?php echo e(url('home/productDetail/' . $p->id)); ?>"><?php echo e($p->name); ?></a></h4>
                            <h3 class="price_product"><?php echo e($p->price); ?> $</h3>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        <hr>
        <button onclick="location.href=`<?php echo e(url('home/product/3')); ?>`" class="view_all_button">View all</button>
    </div>

    <br>

    <div class="container bg_white_container">
        <h1>Some blog</h1>
        <hr>
        <div class="gird wide">
            <div class="row">
                <div class="col l-6 m-6 c-12">
                    <div class="main_blog_home">
                        <img class="img_main_home_blog" src="<?php echo e(asset('img/'.$blog1->image)); ?>" alt="">
                        <h4><a class="main_title_blog" href="<?php echo e(url('home/blogDetail/'.$blog1->id)); ?>"><?php echo e($blog1->topic); ?></a></h4>
                        <h5 class="main_date_blog"><?php echo e($blog1->date); ?></h5>
                    </div>
                </div>
                <div class="col l-6 m-6 c-12">
                    <div class="row">
                        <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col l-12 m-12 c-12">
                            <div class="blog_home">
                                <div class="row">
                                    <div class="col l-4 m-0 c-0">
                                        <img class="img_home_blog" src="<?php echo e(asset('img/'.$b->image)); ?>"
                                            alt="">
                                    </div>
                                    <div class="col l-8 m-12 c-12">
                                        <a class="title_home_blog" href="<?php echo e(url('home/blogDetail/'.$b->id)); ?>"><?php echo e($b->topic); ?></a><br>
                                        <h5 class="date_home_blog"><?php echo e($b->date); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
        <hr>
        <button onclick="location.href=`<?php echo e(url('home/blog')); ?>`" class="view_all_button">View all</button>
    </div>


    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-sem2\resources\views/home/home.blade.php ENDPATH**/ ?>