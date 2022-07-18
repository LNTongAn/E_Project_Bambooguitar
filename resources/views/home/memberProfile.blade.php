@extends('layout.layout')
@section('title', 'OrganicFood')
@section('content')
<nav class="grid wide">
    <div class="row">
        <div class="col l-4 m-0 c-0">
            <div class="avt_member">
                <img class="avatar_member" src="{{ asset('member/img/'.session('member')->picture) }}" alt="">
            </div>
        </div>
        <div class="col l-8 m-12 c-12">

        <div class="row">

            <div class="col l-6 m-6 c-12">
                <div class="select_profile">
                    <span class="content_profile">Profile</span>
                </div>
            </div>

            <div class="col l-6 m-6 c-12">
                <div class="select_profile">
                    <a href="{{ url('home/orderHistory/'.session('member')->id) }}" class="content_profile_F"><span>Order History</span></a>
                </div>
            </div>

            <div class="col l-6 m-6 c-12">
                <div class="select_profile">
                    <a href="{{ url('home/changePass/'.session('member')->id) }}" class="content_profile_F"><span>Change pass</span></a>
                </div>
            </div>

            <div class="col l-6 m-6 c-12">
                <div class="select_profile">
                    <a href="{{ url('home/memberFeedbackHistory/'.session('member')->id) }}" class="content_profile_F"><span>History feedback</span></a>
                </div>
            </div>

        </div>

        </div>
    </div>
    <div style="border-bottom: 1px solid; margin-top:30px"></div>

    <div class="title_profile">
        Profile
    </div>
    <div class="row">
        <div class="col l-6 m-6 c-12">
            <span class="content_info_profile">Email: {{session('member')->email}}</span>
        </div>
        <div class="col l-6 m-6 c-12">
            <span class="content_info_profile">Fullname: {{session('member')->fullname}}</span>
        </div>
        <div class="col l-6 m-6 c-12">
            <span class="content_info_profile">Tel: {{session('member')->tel}}</span>
        </div>
        <div class="col l-6 m-6 c-12">
            <span class="content_info_profile">Address: {{session('member')->address}}</span>
        </div>
    </div>

</nav>
@endsection
@section('script-section')


@endsection
