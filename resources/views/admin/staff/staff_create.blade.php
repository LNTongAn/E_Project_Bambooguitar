<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('layout.admin_layout')
@section('title', 'admin')
@section('content_admin')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    @if (session('message'))
                        <span class="alert alert-danger" style="color: #fff;">
                            {{ session('message') }}
                        </span><br><br>
                    @endif
                    <div class="card card-success shadow">
                        <div class="card-header">
                            <h3 class="card-title">Create staff</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/staff/PostStaffCreate') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <!-- <div class="form-group">
                                        <label for="txt-id">Produc Id</label>
                                        <input type="text" class="form-control" id="txtid" name="id" placeholder="1">
                                    </div> -->
                                <div class="form-group">
                                    <label for="txt-name">Staff name</label>
                                    <input type="text" class="form-control" id="txtusername" name="username"
                                        placeholder="Input Product Name">
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Staff Password</label>
                                    <input type="password" class="form-control" id="txtpassword" name="password"
                                        placeholder="Enter your password">
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Confirm Password</label>
                                    <input type="password" class="form-control" id="txtconfirmpassword"
                                        name="confirm_password" placeholder="Confirm password">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="form-control" name="role" id="txtrole">
                                        <option value="1">staff</option>
                                        <option value="2">admin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="txt-category">Active</label>
                                    <select class="form-control" name="active" id="txtactive">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Create</button>
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
