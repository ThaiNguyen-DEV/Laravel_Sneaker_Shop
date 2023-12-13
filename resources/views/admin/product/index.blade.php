@extends('layouts.admin')

@section('title')
    <title>Add Products</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.content-header', ['name' => 'Products', 'key' => 'List'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('product.create') }}" class="btn btn-success float-right m-2">Add</a>
                    </div>

                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

{{--                            @foreach($categories as $category)--}}

                                <tr>
                                    <th scope="row">1</th>
                                    <td>Adidas Forum 84 Low</td>
                                    <td>2.000.000</td>
                                    <td>
                                        <img src="" alt="">
                                    </td>
                                    <td>Adidas</td>
                                    <td>
                                        <a href="" class="btn btn-default">EDIT</a>
                                        <a href="" class="btn btn-danger">DELETE</a>
                                    </td>
                                </tr>

{{--                            @endforeach--}}

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
{{--                        {{ $categories->links() }}--}}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


