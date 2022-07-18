@extends('layout.admin_layout')
@section('title', 'admin')
@section('content_admin')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order - demo</h1>
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

    <!--ORDER WAITING-->
    {{-- CHỈ CÓ QUẢN TRỊ VIÊN MỚI COI ĐƯỢC BẢNG NÀY --}}
    @if (session('user')->role == 2)
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <span style="float: left; font-size:larger">Manage unconfirmed orders</span>
                        <table id="product" class="table table-hover">
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $o)
                                    @if ($o->status == 'waiting')
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
                                            <td class="text-right">
                                                <a class="btn btn-info btn-sm"
                                                    href="{{ url('admin/order/order_update/' . $o->id) }}">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>

                                                <a class="btn btn-danger btn-sm"
                                                    href="{{ url('admin/order/order_delete/' . $o->id) }}">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>


                                            </td>
                                        </tr>
                                    @endif
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
    @endif
    {{-- END BẢNG ORDER WAITING --}}

    <!--ORDER CONFIRM-->

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <span style="float: left; font-size:larger">Manage confirmed orders</span>
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- FOR EACH RIÊNG 2 CÁI THÌ SẼ GIẢM BỚT GÁNH NẶNG CHO MÁY
                                    GHI CHÚ SỬA SAU --}}
                                @foreach ($orders as $o)
                                {{-- CHỈ CÓ QUẢN TRỊ VIÊN MỚI COI ĐƯỢC ALL --}}
                                    @if ($o->status == 'confirm' && session('user')->role == 2)
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
                                            <td class="text-right">
                                                <a class="btn btn-info btn-sm"
                                                    href="{{ url('admin/order/order_update/' . $o->id) }}">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm"
                                                    href="{{ url('admin/order/order_delete/' . $o->id) }}">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>

                                            </td>
                                        </tr>
                                    @endif

                                    <!--STAFF-->
                                    {{-- NHÂN VIÊN CHỈ COI ĐƯỢC NHỮNG ĐƠN HÀNG DO MÌNH PHỤ TRÁCH --}}
                                    @if ($o->status == 'confirm' && session('user')->role == 1 && session('user')->username == $o->staff_id)
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
                                            <td class="text-right">
                                                <a class="btn btn-info btn-sm"
                                                    href="{{ url('admin/order/order_update/' . $o->id) }}">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm"
                                                    href="{{ url('admin/order/order_delete/' . $o->id) }}">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>

                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                {{-- END LOOP --}}
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
