<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block right">
            <div class="user-panel">
                 
                <div class="info">
                    <a href="" class="d-block"><?php echo e(session('user')->username); ?></a>
                </div>
            </div>
        </li>
        <li class="nav-item d-none d-sm-inline-block right">
            <a href="<?php echo e(url('logoutAdmin')); ?>" class="nav-link nav-icon nav-icon fas fa-sign-out-alt"> logout</a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
<?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/layout/admin-nav-bar.blade.php ENDPATH**/ ?>