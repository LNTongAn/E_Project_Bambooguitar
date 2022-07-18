@extends('layout.admin_layout')
@section('title', 'admin')
@section('content_admin')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                {{-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div> --}}
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <h2 style="max-width: 1000px; margin: 0 auto;">Welcome {{ session('user')->username }} </h2><br>
        <div style="max-width: 1000px; margin: 0 auto;" class="row">
            <div class="col">
                <div class="tag_dashboard">
                    <h5 style="color:#99FAF4">Admin name</h5>
                    <h6>xxxxxxxxxxx</h6>
                </div>
            </div>
            <div class="col">
                <div class="tag_dashboard">
                    <h5 style="color:#E1F376">User name</h5>
                    <h6>{{ session('user')->username }}</h6>
                </div>
            </div>

            <div class="col">
                <div class="tag_dashboard">
                    <h5 style="color:#F55BE6">Password</h5>
                    <button  onclick="location.href=`{{ url('admin/changePass/'.session('user')->username) }}`" class="btn btn-outline-pink">Change password</button>
                </div>
            </div>
        </div>
    </section>

    <br><br>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <span style="float: left; font-size:larger">Products</span>
                        <table id="product" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>description</th>
                                    <th>category_id</th>
                                    <th>image</th>
                                    <th>inventory_qty</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $p)
                                    <tr>
                                        <td>{{ $p->id }}</td>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->price }}</td>
                                        <td>{{ $p->description }}</td>
                                        <td>{{ $p->category_id }}</td>
                                        <td><img width="100px" src="{{ url('images/' . $p->image) }}" /></td>
                                        <td>{{ $p->inventory_qty }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>

                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>


    <!--ORDER-->

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <span style="float: left; font-size:larger">Orders</span>
                        <table id="product2" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order_id</th>
                                    <th>Member_id</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total_amount</th>
                                    <th>Shipping_name</th>
                                    <th>Shipping_mobile</th>
                                    <th>Shipping_email</th>
                                    <th>Shipping_address</th>
                                    <th>Payment_term</th>
                                    <th>Staff_id</th>
                                    <th>Delivered_date</th>
                                    <th>Shipping_fee</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $o)
                                    <tr>
                                        <td>{{ $o->id }}</td>
                                        <td>{{ $o->member_id }}</td>
                                        <td>{{ $o->date }}</td>
                                        <td><b>{{ $o->status }}</b></td>
                                        <td>{{ $o->total_amount }}</td>
                                        <td>{{ $o->shipping_name }}</td>
                                        <td>{{ $o->shipping_mobile }}</td>
                                        <td>{{ $o->shipping_email }}</td>
                                        <td>{{ $o->shipping_address }}</td>
                                        <td>
                                            @if ($o->payment_term == 0)
                                                cash
                                            @else
                                                online
                                            @endif
                                            {{-- {{ $o->payment_term }} --}}
                                        </td>
                                        <td>{{ $o->staff_id }}</td>
                                        <td>{{ $o->delivered_date }}</td>
                                        <td>{{ $o->shipping_fee }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>

                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <style>
        .card {
            width: 1000px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .tag_dashboard {
            background-color: #fff;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px;
            font-family: Arial, Helvetica, sans-serif;
            margin: 10;
            padding: 10px;
            border-radius: 15px;
            text-align: center;
            min-height: 85px;
        }
        .btn-outline-pink{
            color: #F55BE6;
            border-color:#F55BE6;
            background-color: #fff;
            font-size: smaller;
        }
        .btn-outline-pink:hover{
            color:#fff;
            border-color:#F55BE6;
            background-color: #F55BE6;
        }
    </style>
@endsection
@section('script-section')
    <script>
        $(function() {
            $('#product').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "scrollY": 300,
                "scrollX": true
            });
        });
        $(function() {
            $('#product2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "scrollY": 300,
                "scrollX": true
            });
        });
    </script>
@endsection
