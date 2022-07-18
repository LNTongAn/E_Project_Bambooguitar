<aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">FPT-Aptech HCMC</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class=" mt-4 pb-3 mb-1 d-flex"> {{--user-panel--}}
            <!-- <div class="image">
                <img src="" class="img-circle elevation-2" alt="">
            </div> -->
            <div class="info">
                <img width="230px" height="44px"  src="{{ url('img/logo.png') }}" alt="">
            </div>
        </div>
        <div class="user-panel">
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item has-treeview">
                    <!--menu-open-->
                    <a href="{{ url('admin/dashboard') }}" class="nav-link ">
                        <!--fas fa-tachometer-alt-->
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <!--PRODUCTS-->

                <li class="nav-item has-treeview">
                    <!--menu-open-->
                    <a href="#" class="nav-link ">
                        <!--fas fa-tachometer-alt-->
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/product/index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/product/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Products</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--ORDERS-->

                <li class="nav-item has-treeview">
                    <!--menu-open-->
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Orders
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/order/order_index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Order</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--STAFF-->
                <!--ADMIN MỚI ĐƯỢC QUYỀN TRUY CẬP-->
                @if (session('user')->role == 2)
                    <li class="nav-item has-treeview">
                        <!--menu-open-->
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-user-circle"></i>
                            <p>
                                Staff
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('admin/staff/staff_index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Staff</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/staff/staff_create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Staff</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                <!--CUSTOMERS-->

                <li class="nav-item has-treeview">
                    <!--menu-open-->
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Customer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/customer/customer_index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View customer</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <!--FEEDBACK-->

                <li class="nav-item has-treeview">
                    <!--menu-open-->
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-comment-alt"></i>
                        <p>
                            Feedback
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/feedback/feedback_index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View feedback</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--BLOG-->

                <li class="nav-item has-treeview">
                    <!--menu-open-->
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Blog
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/blog/blog_index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View blog</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/blog/blog_create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create blog</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
