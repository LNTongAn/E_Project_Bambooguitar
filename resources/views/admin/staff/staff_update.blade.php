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
                            <h3 class="card-title">Update staff</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/staff/PostStaffUpdate/'.$staff->username) }}" method="post"
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
                                        placeholder="Input Product Name" value="{{ $staff->username }}">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <?php
                                    $disabled = $staff->role == 1 ? '' : 'disabled';
                                    ?>
                                    <select class="form-control" name="role" id="txtrole" {{$disabled}}>
                                        @if ($staff->role == 1)
                                            <option value="1">staff</option>
                                            <option value="2">admin</option>
                                        @else
                                            <option value="1">staff</option>
                                            <option value="2" selected>admin</option>
                                        @endif
                                    </select>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Update</button>
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
