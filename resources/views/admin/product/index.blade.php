@extends('layout.admin_layout')
@section('title', 'admin')
@section('content_admin')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products - eloquent demo</h1>
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
                        <span style="float: left; font-size:larger">Product Management Panel</span>
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
                                    <th></th>
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
                                        <td class="text-right">
                                            {{-- <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i> View
                                    </a> --}}
                                            <a class="btn btn-info btn-sm"
                                                href="{{ url('admin/product/update/' . $p->id) }}">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                            @if (session('user')->role == 2)
                                                <a class="btn btn-danger btn-sm"
                                                    href="{{ url('admin/product/delete/' . $p->id) }}">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>
                                            @endif
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
