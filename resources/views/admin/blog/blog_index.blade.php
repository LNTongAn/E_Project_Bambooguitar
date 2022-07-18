@extends('layout.admin_layout')
@section('title', 'admin')
@section('content_admin')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blog - demo</h1>
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
                        <span style="float: left; font-size:larger">Blogs Management Panel</span>
                        <table id="product" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Blog Id</th>
                                    <th>Topic</th>
                                    <th>Content</th>
                                    <th>image</th>
                                    <th>date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blog as $b)
                                    <tr>
                                        <td>{{ $b->id }}</td>
                                        <td>{{ $b->topic }}</td>
                                        <td>{{ $b->content }}</td>
                                        <td><img width="100px" src="{{ url('img/' . $b->image) }}" /></td>
                                        <td>{{ $b->date }}</td>
                                        <td class="text-right">
                                            {{-- <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i> View
                                    </a> --}}
                                            <a style="" class="btn btn-info btn-sm"
                                                href="{{ url('admin/blog/blog_update/' . $b->id) }}">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                            @if (session('user')->role == 2)
                                                <a class="btn btn-danger btn-sm"
                                                    href="{{ url('admin/blog/deleteBlog/' . $b->id) }}">
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
