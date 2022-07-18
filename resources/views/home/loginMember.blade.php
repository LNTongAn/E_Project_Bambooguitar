@extends('layout.layout')
@section('title', 'OrganicFood')
@section('content')

    <div class="container">
        {{-- THÔNG BÁO LOGIN KHÔNG ĐƯỢC --}}
        @if (session('message'))
            <div style="text-align:center;">
                <br>
                <span class="alert alert-danger" style="color: red">
                    Error: {{ session('message') }}
                </span>
            </div>
        @endif
        {{-- END THÔNG BÁO LOGIN_FAIL --}}
        {{-- FORM LOGIN MEMBER --}}
        <form action="{{ url('home/checkLogin') }}" method="post" class="form_login_member">
            @csrf
            <div class="title_login_member">
                <span class="content_login_member">Login</span>
            </div>
            <label class="label_login_member" for="">Username</label><br>
            <input class="password_login_member" name="email" type="email" required><br>
            <label class="label_login_member" for="">Password</label><br>
            <input class="password_login_member" name="password" type="password" required><br>

            <button class="login_button_member">Log in</button>
            <div class="form_login_link_register">
                You don`t have an account? <a href="{{ url('home/signUp') }}">Register here!</a>
            </div>
        </form><br>

    </div>

@endsection
@section('script-section')


@endsection
