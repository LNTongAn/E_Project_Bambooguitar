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
                                class="content_profile_F"><span>Profile</span></a>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <a href="{{ url('home/orderHistory/' . session('member')->id) }}"
                                class="content_profile_F"><span>Order History</span></a>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <a href="{{ url('home/changePass/' . session('member')->id) }}"
                                class="content_profile_F"><span>Change pass</span></a>
                        </div>
                    </div>

                    <div class="col l-6 m-6 c-12">
                        <div class="select_profile">
                            <span class="content_profile">History Feedback</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div style="border-bottom: 1px solid; margin-top:30px"></div>
        <br>
        <table class="table table-hover bg_white_container">
            <tr style="background-color:#33CC33; color:#eee">
                <th>Product ID</th>
                <th>Created date</th>
                <th>Feedback</th>
                <th>Staff reply</th>
                <th>Reply</th>
                <th>Date reply</th>
                <th></th>
            </tr>
            <!--THÔNG TIN LỊCH SỬ ĐÃ FEEDBACK-->
            @foreach ($feedback as $f)
                <tr>
                    <td>{{ $f->product_id }}</td>
                    <td>{{ $f->created_date }}</td>
                    <td>{{ $f->comment }}</td>
                    <td>{{ $f->staff_id }}</td>
                    <td>{{ $f->reply }}</td>
                    <td>{{ $f->created_DateRep }}</td>
                    <td>
                        <button style="padding: 5px 10px 5px 10px; border-radius:15px;" class="btn-success"
                            data-toggle="modal" data-target="#myModal{{ $f->id }}">
                            <i class="glyphicon glyphicon-eye-open"></i> Feedback detail</button>
                        {{-- @if ($oh->status == 'waiting')
                        <button onclick="location.href=`{{ url('home/deleteOrder/' . $oh->id) }}`"
                            style="padding: 5px 10px 5px 10px; border-radius:15px;" class="btn-danger">
                            <i class="glyphicon glyphicon-trash"></i> Cancellation</button>
                    @endif --}}
                    </td>
                </tr>
            @endforeach
        </table>
    </nav>
    <!--FEEDBACK DETAIL MODAL-->
    @foreach ($feedback as $f)
        <div id="myModal{{ $f->id }}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Feedback detail</h4>
                    </div>
                    <div class="modal-body">
                        <!--THÔNG TIN FEEDBACK-->
                        <h4>Feedback</h4>
                        <table class="table table-hover">
                            <tr>
                                <th>Product ID</th>
                                <th>Created date</th>
                                <th>Feedback</th>
                                <th>Staff reply</th>
                                <th>Reply</th>
                                <th>Date reply</th>
                            </tr>
                            <tr>
                                <td>{{ $f->product_id }}</td>
                                <td>{{ $f->created_date }}</td>
                                <td>{{ $f->comment }}</td>
                                <td>{{ $f->staff_id }}</td>
                                <td>{{ $f->reply }}</td>
                                <td>{{ $f->created_DateRep }}</td>
                            </tr>
                        </table>
                        <hr>
                        <!--THÔNG TIN SẢN PHẨM ĐÃ FEEDBACK-->
                        <h4>The product you have commented on</h4>
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                            </tr>
                            @foreach ($productfb as $pf)
                                <!--KIỂM TRA DỰA VÀO PK VÀ FK,
                                            LẤY SP CÓ PRODUCT_ID-->
                                @if ($f->product_id == $pf->id)
                                    <tr>
                                        <td>{{ $pf->id }}</td>
                                        <td>{{ $pf->name }}</td>
                                        <td>
                                            <img src="{{ url('images/' . $pf->image) }}" alt="" width="100"
                                                height="100">
                                        </td>
                                        <td>$ {{ $pf->price }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </table><hr>
                        <a href="{{ url('home/productDetail/'.$f->product_id) }}">Come see feedback -></a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
@section('script-section')


@endsection
