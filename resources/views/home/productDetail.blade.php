@extends('layout.layout')
@section('title', 'OrganicFood')
@section('content')
    <nav class="grid wide">
        <div class="row">
            <div class="col l-4 m-0 c-0">
                <div class="product_detail">
                    <img class="img_product_detail" src="{{ url('images/' . $p->image) }}" alt="">
                </div>
            </div>
            <div class=" l-8 m-12 c-12">
                <div class="product_detail">
                    <h1 class="product_detail_title">{{ $p->name }}</h1>
                    <h2 class="product_detail_price">{{ $p->price }} $</h2>
                    <h2 class="product_detail_quanity">Quanity: <input style="border-color:#33CC33; border-radius:15px;"
                            inputmode="numeric" class="form-filter" type="number" value="1" min="1"
                            max="{{ $p->inventory_qty }}"></h2>
                    <div>
                        <button onclick="location.href=`{{ url('home/add-to-cart/' . $p->id) }}`"
                            class="product_detail_button">Add to cart <span
                                class="glyphicon glyphicon-shopping-cart"></button>
                        <button class="product_detail_button">Check out <span
                                class="glyphicon glyphicon-check"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="bg_white_container">
            <h3 class="product_detail_description_title">Description</h3>
            <hr>
            <h4 class="product_detail_description_content">
                {!! $p->description !!}
            </h4>
        </div>

        <br>

        <div class="bg_white_container">
            <h3 class="product_detail_description_title">Customer Feedback</h3>
            <hr>

            {{-- NẾU KHÔNG LẤY ĐƯỢC DỮ LIỆU TỪ BẢNG FB CHỨNG TỎ CHƯA CÓ AI CMT --}}
            @if ($fbn == null)
                <div style="text-align: center;">
                    <h4 style="color: silver">There are no reviews for this product yet.</h4>
                </div>
            @endif

            {{-- IN RA CMT --}}
            @foreach ($fb as $f)
                {{-- START FB --}}
                <div class="media">
                    <div class="media-left">
                        <img src="{{ url('member/img/' . $f->picture) }}" class="media-object"
                            style="width:45px; border-radius:50%;">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $f->fullname }} <small><i>{{ $f->created_date }}</i></small></h4>
                        <p style="background-color: #eee; display:table; padding: 10px 12px 10px 12px; border-radius:15px;">
                            {{ $f->comment }}</p>

                        <!-- Nested media object -->
                        {{-- REPLY --}}
                        {{-- NẾU BÊN KIA ĐÃ REPLY R THÌ SHOW RA KO THÌ THÔI --}}
                        @if ($f->reply != null)
                            <div class="media">
                                <li style="list-style-type: none;">
                                    <div class="media-left">
                                        <img src="{{ url('admin/img/img_avatar.png') }}" class="media-object"
                                            style="width:45px; border-radius:50%;">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ $f->staff_id }}
                                            <small><i>{{ $f->created_DateRep }}</i></small></h4>
                                        <p
                                            style="background-color: #eee; display:table; padding: 10px 12px 10px 12px; border-radius:15px;">
                                            {{ $f->reply }}</p>
                                    </div>
                                </li>
                            </div>
                        @endif
                        {{-- END REPLY --}}
                    </div>
                </div>
            @endforeach
            {{-- END FB --}}
        </div>


        {{-- PHƯƠNG THỨC LẤY TIME HIỆN TẠI --}}
        @php
            use Carbon\Carbon;
            $mytime = Carbon::now();
        @endphp
        {{-- CÓ TÀI KHOẢN MỚI SEND ĐC FB NHAAAAAAAA!!! --}}
        @if (session('member'))
            <br>
            <div class="bg_white_container">
                <form action="{{ url('home/productDetail/PostFeedbackMember/' . $p->id) }}">
                    <div class="form-group">
                        <label for="">Feedback</label>
                        {{-- AVATAR NG DÙNG :)) --}}
                        <div class="media">
                            <div class="media-left">
                                <img style="border-radius:50%"
                                    src="{{ url('member/img/' . session('member')->picture) }}" class="media-object"
                                    width="45px">
                            </div>
                            {{-- TÊN NG DÙNG --}}
                            <div class="media-body">
                                <h4 class="media-heading">{{ session('member')->fullname }}<small>
                            </div>
                            <br>
                        </div>
                        {{-- END AVATAR NG DÙNG :)) --}}
                        {{-- INPUT CHO FB --}}
                        {{-- LẤY ID --}}
                        <input class="form-control" type="hidden" name="member_id" id="member_id"
                            value="{{ session('member')->id }}">
                        {{-- LẤY TIME CREATE --}}
                        <input type="hidden" name="created_date" id="created_date" value="{{ $mytime }}">
                        {{-- LẤY NỘI DUNG FEEDBACK --}}
                        <input class="form-control" type="text" name="feedback" id="feedback" required>

                    </div>
                    {{-- BUTTON ĐỂ SEND FB --}}
                    <button style="padding: 5px 10px 5px 10px; border-radius:15px;" class="btn-success"><i
                            class="glyphicon glyphicon-send"></i> Send</button>
                </form>
            </div>
        @endif
    </nav>
@endsection
@section('script-section')


@endsection
