@extends('layout.layout')
@section('title', 'OrganicFood')
@section('content')
    <nav class="grid wide">
        <div class="row">
            <div class="col l-4 m-0 c-0">
                <div class="avt_member">
                    <img class="avatar_member" src="{{ asset('member/img/' . session('member')->picture) }}" alt="">
                </div>
            </div>
            <div class="col l-8 m-12 c-12">

                <div class="row">

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <a href="{{ url('home/memberProfile/' . session('member')->id) }}"
                                class="content_profile_F"><span class="">Profile</span></a>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <a href="{{ url('home/orderHistory/'.session('member')->id) }}" class="content_profile_F"><span class="">Order History</span></a>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <span class="content_profile">Change password</span>
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
            Change password
        </div>
        <div class="row">
            <div class="col l-12 m-12 c-12">
                @if (session('passT'))
                    <span class="alert alert-success" style="color: green">
                        {{ session('passT') }}
                    </span>
                @endif
            </div>
            <div class="col l-12 m-12 c-12">
                @if (session('passF'))
                    <span class="alert alert-danger" style="color: red">
                        Error: {{ session('passF') }}
                    </span>
                @endif
            </div>
            <form class="change_pass_form" action="{{ url('home/PostMemberChangePass/' . session('member')->id) }}" method="get">
                Old password:
                <div class="col l-12 m-12 c-12"><input type="text" name="old_pass" class="form-control"></div>
                New password:
                <div class="col l-12 m-12 c-12"><input type="text" name="new_pass" class="form-control"></div>
                Confirm password:
                <div class="col l-12 m-12 c-12"><input type="text" name="confirm_pass" class="form-control"></div>
                <button class="button_change_pass">Change</button>
            </form>
        </div>

    </nav>
@endsection
@section('script-section')


@endsection
