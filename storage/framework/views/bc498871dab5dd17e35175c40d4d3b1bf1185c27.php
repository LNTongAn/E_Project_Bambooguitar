<nav style="background-color: #00CC66; border:none;" id="test-navbar" class="test-navbar">
    <div class="container-fluid">
        <div style="color: white;" class="navbar-header">
            <br>
            <span><i class="fa fa-phone"></i></span>
            <a style="color:white" href="#">+84 123 456 789</a>&nbsp;&nbsp;&nbsp;
            <span><i class="fa fa-envelope"></i></span>
            <a style="color:white" href="#">diachiemail@gmail.com</a></p>

        </div>

        <ul class="nav-hover navbar-nav navbar-right">
            <?php if(session('member')): ?>
                <li><a class="navbar_login" href="<?php echo e(url('home/memberProfile/' . session('member')->id)); ?>"><span
                            class="glyphicon glyphicon-user"></span> <?php echo e(session('member')->fullname); ?></a></li>
                <li><a class="navbar_login" href="<?php echo e(url('logoutMember')); ?>"><span
                            class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            <?php else: ?>
                <li><a class="navbar_login" href="<?php echo e(url('home/signUp')); ?>"><span
                            class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a class="navbar_login" href="<?php echo e(url('home/loginMember')); ?>"><span
                            class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<!--main-navbar-->
<nav style="background-color: #fff; border:none;" id="main-navbar" class="main-navbar">
    <div class="container-fluid">
        <div style="color: white;" class="navbar-main-header">
            <img src="<?php echo e(asset('img/logo.png')); ?>" alt="" height="45px">
            <div></div>
        </div>

        <ul class="nav-main-hover navbar-nav navbar-right">
            <li><a class="navbar_main" href="<?php echo e(url('/')); ?>"><span class="glyphicon glyphicon-home"></span>
                    Home</a></li>
            <li><a class="navbar_main" href="<?php echo e(url('home/about')); ?>"><span class=""></span>About</a></li>
            <li><a class="navbar_main" href="<?php echo e(url('home/blog')); ?>"><span class=""></span>Blog</a></li>
            <li><a class="navbar_main" href="<?php echo e(url('home/contact')); ?>"><span class=""></span>Contact</a></li>
            <li><a class="navbar_main" href="<?php echo e(url('home/cart')); ?>"><span
                        class="glyphicon glyphicon-shopping-cart"></span>cart
                    (<span style="color: red;">
                        <?php if(session('cart')): ?>
                            <?php echo e(count(session('cart'))); ?>

                        <?php else: ?>
                            0
                        <?php endif; ?>
                    </span>)
                </a></li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\project-sem2\resources\views/layout/nav-bar.blade.php ENDPATH**/ ?>