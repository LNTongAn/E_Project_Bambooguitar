@extends('layout.admin_layout')
@section('title', 'admin')
@section('content_admin')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Feedback - demo</h1>
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

    <!--CUSTOMER NOT YET REPLY-->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <span style="float: left; font-size:larger">Manage not answered customer</span>
                        <table id="product" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product_id</th>
                                    <th>Member_id</th>
                                    <th>Create_date</th>
                                    <th>Comment</th>
                                    <th>Staff_id</th>
                                    <th>Reply</th>
                                    <th>Time Reply</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedback as $f)
                                    @if ($f->reply == null)
                                        <tr>
                                            <td>{{ $f->id }}</td>
                                            <td>{{ $f->product_id }}</td>
                                            <td>{{ $f->member_id }}</td>
                                            <td>{{ $f->created_date }}</td>
                                            <td>{{ $f->comment }}</td>
                                            <td>{{ $f->staff_id }}</td>
                                            <td>{{ $f->reply }}</td>
                                            <td>{{ $f->created_DateRep }}</td>
                                            <td class="text-right">
                                                <a class="btn btn-info btn-sm"
                                                    href="{{ url('admin/feedback/feedback_reply/' . $f->id) }}">
                                                    <i class="fas fa-pencil-alt"></i> Reply
                                                </a>

                                                @if (session('user')->role == 2)
                                                    <a class="btn btn-danger btn-sm" href="{{ url('admin/feedback/deleteFeedback/' . $f->id) }}">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                @endif


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
    {{-- END BẢNG CUSTOMER NOT ANSWER --}}

    <!--BẢNG REPLY CUSTOMER-->

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <span style="float: left; font-size:larger">Manage reply customer</span>
                        <table id="product2" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product_id</th>
                                    <th>Member_id</th>
                                    <th>Create_date</th>
                                    <th>Comment</th>
                                    <th>Staff_id</th>
                                    <th>Reply</th>
                                    <th>Time reply</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedback as $f)
                                    @if ($f->reply != null)
                                        <tr>
                                            <td>{{ $f->id }}</td>
                                            <td>{{ $f->product_id }}</td>
                                            <td>{{ $f->member_id }}</td>
                                            <td>{{ $f->created_date }}</td>
                                            <td>{{ $f->comment }}</td>
                                            <td>{{ $f->staff_id }}</td>
                                            <td>{{ $f->reply }}</td>
                                            <td>{{ $f->created_DateRep }}</td>
                                            <td class="text-right">
                                                <a class="btn btn-info btn-sm"
                                                    href="{{ url('admin/feedback/feedback_reply/' . $f->id) }}">
                                                    <i class="fas fa-pencil-alt"></i> Reply
                                                </a>
                                                @if (session('user')->role == 2)
                                                    <a class="btn btn-danger btn-sm" href="{{ url('admin/feedback/deleteFeedback/' . $f->id) }}">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                @endif

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
