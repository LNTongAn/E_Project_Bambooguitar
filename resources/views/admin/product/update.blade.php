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
                        <h3 class="card-title">Update {{ $p->name }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/product/postUpdate/'.$p->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Produc Id</label>
                                <input type="text" class="form-control" id="txtid" name="id" placeholder="1" value="{{ $p->id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Produc Name</label>
                                <input type="text" class="form-control" id="txtname" name="name" placeholder="Input Product Name" value="{{ $p->name }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Produc Price</label>
                                <input type="text" class="form-control" id="txtprice" name="price" placeholder="1" value="{{ $p->price }}">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description" placeholder="Enter ..." >{{ $p->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="txt-category">Category_id</label>
                                <input type="number" class="form-control" id="txtcategoryid" name="category_id" placeholder="1" value="{{ $p->category_id }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <img class="img-fluid" src="{{ url('images/'.$p->image) }}" />
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-fileinput" id="image" name="image">
                                        <label class="custom-filelabel" for="image">Choose Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txt-inventory">inventory_qty</label>
                                <input type="number" class="form-control" id="txtinventory" name="inventory_qty" placeholder="1" value="{{ $p->inventory_qty }}">
                            </div>
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
    .offset-md-3{
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
