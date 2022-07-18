@extends('layout.layout')
@section('title', 'OrganicFood')
@section('content')

<div class="container">

    <form action="{{ url('home/postSignUp') }}" class="form_signUp_member" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="title_signUp_member">
            <span class="content_signUp_member">Register</span>
        </div>
        <label class="label_login_member" for="">Email</label><br>
        <input class="password_login_member" name="email" type="email" required><br>
        <label class="label_login_member" for="">Password</label><br>
        <input class="password_login_member" name="password" type="password" required><br>
        <label class="label_login_member" for="">Picture</label><br>
        <input class="input_file_member" name="picture" id="picture" type="file"><br>
        <label class="label_login_member" for="">Fullname</label><br>
        <input class="password_login_member" name="fullname" type="text" required><br>
        <label class="label_login_member" for="">Tel</label><br>
        <input class="password_login_member" name="tel" type="number" minlength="8" maxlength="11" required><br>
        <label class="label_login_member" for="">Address</label><br>
        <input class="password_login_member" name="address" type="text" required><br>
        <label class="label_login_member" for="">Active</label><br>
        <select class="input_active_member" name="active">
                <option value="0">Please choose one</option>
                <option value="1">Active</option>
                <option value="2">Disable</option>
            </select>
        <button class="signUp_button_member">Register</button>
    </form><br>
    
</div>

@endsection
@section('script-section')


@endsection