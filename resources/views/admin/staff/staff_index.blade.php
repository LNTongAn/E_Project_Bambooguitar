@extends('layout.admin_layout')
@section('title', 'admin')
@section('content_admin')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Staff - demo</h1>
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

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <span style="float: left; font-size:larger">Staff Management Panel</span>
                        <table id="product" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Role</th>
                                    {{-- <th>Active</th> --}}
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($staff as $s)
                                    <tr>
                                        <td>{{ $s->username }}</td>
                                        <td>{{ $s->role }}</td>
                                        {{-- <td>{{ $s->active }}</td> --}}
                                        <td class="text-right">
                                            @if ($s->active == 1)
                                                <a class="btn btn-success btn-sm"
                                                    href="{{ url('admin/staff/lockStaff/' . $s->username) }}">
                                                    <i class="fas fa-unlock"></i>
                                                </a>
                                            @endif
                                            @if ($s->active == 2)
                                                <a class="btn btn-warning btn-sm"
                                                    href="{{ url('admin/staff/lockStaff/' . $s->username) }}">
                                                    <i class="fas fa-lock"></i>
                                                </a>
                                            @endif

                                            <a class="btn btn-info btn-sm"
                                                href="{{ url('admin/staff/staff_update/' . $s->username) }}">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm"
                                                href="{{ url('admin/staff/deleteStaff/' . $s->username) }}">
                                                <i class="fas fa-trash"></i> Delete
                                            </a>
                                        </td>
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
    </script>
@endsection
