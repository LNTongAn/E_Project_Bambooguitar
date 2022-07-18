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
            @if (session('member'))
                <li><a class="navbar_login" href="{{ url('home/memberProfile/' . session('member')->id) }}"><span
                            class="glyphicon glyphicon-user"></span> {{ session('member')->fullname }}</a></li>
                <li><a class="navbar_login" href="{{ url('logoutMember') }}"><span
                            class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            @else
                <li><a class="navbar_login" href="{{ url('home/signUp') }}"><span
                            class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a class="navbar_login" href="{{ url('home/loginMember') }}"><span
                            class="glyphicon glyphicon-log-in"></span> Login</a></li>
            @endif
        </ul>
    </div>
</nav>

<!--main-navbar-->
<nav style="background-color: #fff; border:none;" id="main-navbar" class="main-navbar">
    <div class="container-fluid">
        <div style="color: white;" class="navbar-main-header">
            <img src="{{ asset('img/logo.png') }}" alt="" height="45px">
            <div></div>
        </div>

        <ul class="nav-main-hover navbar-nav navbar-right">
            <li><a class="navbar_main" href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span>
                    Home</a></li>
            <li><a class="navbar_main" href="{{ url('home/about') }}"><span class=""></span>About</a></li>
            <li><a class="navbar_main" href="{{ url('home/blog') }}"><span class=""></span>Blog</a></li>
            <li><a class="navbar_main" href="{{ url('home/contact') }}"><span class=""></span>Contact</a></li>
            <li><a class="navbar_main" href="{{ url('home/cart') }}"><span
                        class="glyphicon glyphicon-shopping-cart"></span>cart
                    (<span style="color: red;">
                        @if (session('cart'))
                            {{ count(session('cart')) }}
                        @else
                            0
                        @endif
                    </span>)
                </a></li>
        </ul>
    </div>
</nav>
