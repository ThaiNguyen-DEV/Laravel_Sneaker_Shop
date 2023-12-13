@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->
        @include('partials.content-header', ['name' => 'Product', 'key' => 'Add'])
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('menus.store') }}" method="post">
                            @csrf
                            <div class="form-groupz">
                                <label>Menu Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Input Menu Name">
                            </div>

                            <div class="form-group">
                                <label>Root Category</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Choose Root Category</option>
                                    {!! $optionSelect !!}
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


