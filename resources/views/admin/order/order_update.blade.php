<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('layout.admin_layout')
@section('title', 'admin')
@section('content_admin')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Update order number {{ $o->id }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/order/PostUpdateOrder/' . $o->id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">Order Id</label>
                                    <input type="text" class="form-control" id="txtid" name="id" placeholder="1"
                                        value="{{ $o->id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Member Id</label>
                                    <input type="text" class="form-control" id="txtmember_id" name="memberId"
                                        placeholder="" value="{{ $o->member_id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Date</label>
                                    <input type="text" class="form-control" id="txtdate" name="date" placeholder=""
                                        value="{{ $o->date }}" readonly>
                                </div>
                                <div class="form-group">
                                    @php
                                        $disable = $o->status == 'waiting' ? '' : 'disabled';
                                    @endphp
                                    <label for="txt-price">Status</label>
                                    <select class="form-control" id="txtstatus" name="status" {{ $disable }}>
                                        @if ($o->status == 'waiting')
                                            <option value="waiting" selected>waiting</option>
                                            <option value="confirm">confirm</option>
                                        @else
                                            <option value="waiting">waiting</option>
                                            <option value="confirm" selected>confirm</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Shipping name</label>
                                    <input type="text" class="form-control" name="shipping_name" placeholder="Enter ..."
                                        value="{{ $o->shipping_name }}">
                                </div>
                                <div class="form-group">
                                    <label>Shipping mobile</label>
                                    <input type="number" class="form-control" name="shipping_mobile"
                                        placeholder="Enter ..." value="{{ $o->shipping_mobile }}">
                                </div>
                                <div class="form-group">
                                    <label>Shipping email</label>
                                    <input type="text" class="form-control" name="shipping_email"
                                        value="{{ $o->shipping_email }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Shipping_address</label>
                                    <input type="text" class="form-control" name="shipping_address"
                                        value="{{ $o->shipping_address }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>payment_method</label>
                                    @if ($o->payment_term == 0)
                                        <input type="text" class="form-control" name="" value="Cash" readonly>
                                        <input type="hidden" class="form-control" name="payment_term" value="0"
                                            readonly>
                                    @else
                                        <input type="text" class="form-control" name="" value="Online" readonly>
                                        <input type="hidden" class="form-control" name="payment_term" value="1"
                                            readonly>
                                    @endif

                                </div>
                                <!--QUẢN TRỊ VIÊN MỚI ĐƯỢC QUYỀN CHỈNH NHÂN VIÊN-->
                                @if (session('user')->role == 2)
                                    <div class="form-group">
                                        <label for="txt-category">Staff id</label>
                                        <select class="form-control" name="staff_id" id="txtstaff_id" required>
                                            <!--CHƯA CÓ NHÂN VIÊN NÀO THÌ VÔ ĐÂY-->
                                            @if ($o->staff_id == null)
                                                <option></option>
                                                @foreach ($staff as $s)
                                                    <option value="{{ $s->username }}">{{ $s->username }}</option>
                                                @endforeach
                                            @else
                                                <!--CÒN LẠI VÔ ĐÂY-->
                                                <option value="{{ $o->staff_id }}">{{ $o->staff_id }}</option>
                                                @foreach ($staff as $s)
                                                    <!--LẶP TRÁNH GIÁ TRỊ ĐÃ CÓ Ở TRÊN-->
                                                    @if ($s->username != $o->staff_id)
                                                        <option value="{{ $s->username }}">{{ $s->username }}</option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <!--NHÂN VIÊN THÌ CHỈ LẤY GIÁ TRỊ MẶC ĐỊNH Ở DƯỚI KHÔNG ĐƯỢC SỬA-->
                                @else
                                    <input type="hidden" name="staff_id" id="txtstaff_id" value="{{ $o->staff_id }}">
                                @endif
                                <div class="form-group">
                                    <label>Delivered date</label>
                                    <input type="date" class="form-control" name="delivered_date"
                                        value="{{ $o->delivered_date }}">
                                </div>
                                <div class="form-group">
                                    <label>Shipping fee</label>
                                    <input type="text" class="form-control" name="shipping_fee"
                                        value="{{ $o->shipping_fee }}">
                                </div>
                                <table class="table table-hover">
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                    @foreach ($order_item as $oi)
                                        <tr>
                                            <td>{{ $oi->name }}</td>
                                            <td><img width="100px" src="{{ url('images/' . $oi->image) }}" /></td>
                                            <td>{{ $oi->qty }}</td>
                                            <td>{{ $oi->price }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="3">Total</td>
                                        <td>$ {{ $o->total_amount }}</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <style>
        .offset-md-3 {
            margin-top: 16px;
        }
    </style>
@endsection
@section('script-section')
    <script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-fileinput.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
