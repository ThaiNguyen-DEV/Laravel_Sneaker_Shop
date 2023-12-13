@extends('layouts.admin')

@section('title')
    <title>Add Products</title>
@endsection

@section('css')
    <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admins/product/add/add.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->
        @include('partials.content-header', ['name' => 'Product', 'key' => 'Add'])
        <!-- Main content -->
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Product Name">
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price" placeholder="Enter Price">
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control-file" name="feature_image_path">
                            </div>

                            <div class="form-group">
                                <label>More Image</label>
                                <input type="file" multiple class="form-control-file" name="image_path[]">
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control select2_init" name="category_id">
                                    <option value="">Choose Category</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Product Tag</label>
                                <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">

                                </select>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="contents" class="form-control tinymce_editor_init"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </form>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('js')
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
{{--    <script src="https://cdn.tiny.cloud/1/34072unfuk5it8uqxgzj58r71yl1hcyf37qqbpnlt2n471ev/tinymce/5/tinymce.min.js"--}}
{{--            referrerpolicy="origin"></script>--}}
    <script src="https://cdn.tiny.cloud/1/34072unfuk5it8uqxgzj58r71yl1hcyf37qqbpnlt2n471ev/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('admins/product/add/add.js') }}"></script>
@endsection


