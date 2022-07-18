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
                            <span class="content_profile">Order History</span>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <a class="content_profile_F" href="{{ url('home/changePass/' . session('member')->id) }}">
                                <span class="">Change password</span></a>
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
        <br>

        @if (session('alert'))
            <span class="alert alert-success" style="color: green">
                {{ session('alert') }}
            </span><br><br>
        @endif

        <!--ORDER HISTORY-->
        <table class="table table-hover bg_white_container">
            <tr style="background-color:#33CC33; color:#eee">
                <th>ID</th>
                <th>Status</th>
                <th>Date</th>
                <th>Total amount</th>
                <th>Address</th>
                <th>Payment term</th>
                <th>Delivered_date</th>
                <th></th>
            </tr>
            <!--THÔNG TIN LỊCH SỬ ĐÃ ORDER-->
            @foreach ($o as $oh)
                <tr>
                    <td>{{ $oh->id }}</td>
                    <td><b>{{ $oh->status }}</b></td>
                    <td>{{ $oh->date }}</td>
                    <td>{{ $oh->total_amount }}</td>
                    <td>{{ $oh->shipping_address }}</td>
                    <td>
                        @if ($oh->payment_term == 0)
                            Cash
                        @else
                            Online
                        @endif
                    </td>
                    <td>{{ $oh->delivered_date }}</td>
                    <td>
                        <button style="padding: 5px 10px 5px 10px; border-radius:15px;" class="btn-success"
                            data-toggle="modal" data-target="#myModal{{ $oh->id }}">
                            <i class="glyphicon glyphicon-eye-open"></i> Order detail</button>
                        @if ($oh->status == 'waiting')
                            <button onclick="location.href=`{{ url('home/deleteOrder/' . $oh->id) }}`"
                                style="padding: 5px 10px 5px 10px; border-radius:15px;" class="btn-danger">
                                <i class="glyphicon glyphicon-trash"></i> Cancellation</button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </nav>

    <!--ORDER DETAIL MODAL-->
    @foreach ($o as $oh)
        <div id="myModal{{ $oh->id }}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Order detail</h4>
                    </div>
                    <div class="modal-body">
                        <!--THÔNG TIN ORDER-->
                        <h4>Order information</h4>
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Total amount</th>
                                <th>Address</th>
                                <th>Payment term</th>
                                <th>Delivered_date</th>
                            </tr>
                            <tr>
                                <td>{{ $oh->id }}</td>
                                <td>{{ $oh->status }}</td>
                                <td>{{ $oh->date }}</td>
                                <td>{{ $oh->total_amount }}</td>
                                <td>{{ $oh->shipping_address }}</td>
                                <td>
                                    @if ($oh->payment_term == 0)
                                        Cash
                                    @else
                                        Online
                                    @endif
                                </td>
                                <td>{{ $oh->delivered_date }}</td>
                            </tr>
                        </table>
                        <hr>
                        <!--THÔNG TIN SẢN PHẨM ĐÃ ORDER-->
                        <h4>Ordered product information</h4>
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                            @foreach ($oi as $oid)
                                <!--KIỂM TRA DỰA VÀO PK VÀ FK,
                                LẤY SẢN PHẨM ĐANG CÓ order_id THEO ĐƠN HÀNG-->
                                @if ($oh->id == $oid->order_id)
                                    <tr>
                                        <td>{{ $oid->product_id }}</td>
                                        <td>{{ $oid->name }}</td>
                                        <td>
                                            <img src="{{ url('images/' . $oid->image) }}" alt="" width="100"
                                                height="100">
                                        </td>
                                        <td>{{ $oid->qty }}</td>
                                        <td>$ {{ $oid->price }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            <tr>
                                <td colspan="4">Total</td>
                                <td>$ {{ $oh->total_amount }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <style>

    </style>
@endsection
@section('script-section')


@endsection
