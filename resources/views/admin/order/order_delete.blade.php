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
                            <h3 class="card-title">Delete order number {{ $o->id }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/order/PostDeleteOrder/' . $o->id) }}"
                            enctype="multipart/form-data">
                            {{-- {{ csrf_field() }} --}}
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

                                <div class="form-group" hidden>
                                    <label>Shipping email</label>
                                    <input type="text" class="form-control" name="shipping_email"
                                        value="{{ $o->shipping_email }}" readonly>
                                </div>

                                <!--REASON FOR ORDER-->
                                <div class="form-group">
                                    <label>Reason for order cancellation</label>
                                    <input type="text" class="form-control" name="reason"
                                        value="" required>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Delete</button>
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
