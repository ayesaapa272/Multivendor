@extends('layouts.app_admin')

@section('content')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
        @include('layouts.admin_blade_title', [
                'title' => 'Create Product Video'
            ])

        <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h3 class="card-title">Upload Product Video</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                            <form role="form" action="{{route('productVideo.store')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group col-md-6 float-left">
                                        <label for="exampleInputPassword1">Product Name</label>
                                        <select name="product_name" id="" id="" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                            <option selected>Select Product</option>
                                            @foreach($products as $product)
                                                <option value="{{$product->id}}">{{$product->product_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6 float-left">
                                        <label for="exampleFormControlFile1">Product Video</label>
{{--                                        <input type="file" name="product_image" class="form-control-file" id="exampleFormControlFile1">--}}
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                <input type="file" name="product_image"  class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- /.box-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-outline-dark btn-block">Submit</button>
                                </div>
                            </form>
                                <!-- /.card -->

                            </div>
                            <!--/.col (left) -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
            </section>
            <!-- /.content -->
@endsection
