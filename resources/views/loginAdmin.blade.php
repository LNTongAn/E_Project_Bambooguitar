@extends('layout.layout')
@section('title', 'OrganicFood')
@section('content')

    <div class="container">

        <!--THÔNG BÁO ĐĂNG NHẬP LỖI-->
        @if (session('message'))
            <div style="text-align:center;">
                <br>
                <span class="alert alert-danger" style="color: red">
                    Error: {{ session('message') }}
                </span>
            </div>
        @endif
        {{-- END THÔNG BÁO LỖI --}}
        {{-- FORRM LOGIN --}}
        <form action="{{ url('checkLoginAdmin') }}" method="post" class="form_login_member">
            @csrf
            <div class="title_login_member">
                <span class="content_login_member">Admin</span>
            </div>

            <label class="label_login_member" for="">Username</label><br>
            <input class="password_login_member" name="username" type="username" required><br>
            <label class="label_login_member" for="">Password</label><br>
            <input class="password_login_member" name="password" type="password" required><br>

            <button class="login_button_member">Log in</button>

        </form><br>

    </div>

@endsection
@section('script-section')


@endsection
