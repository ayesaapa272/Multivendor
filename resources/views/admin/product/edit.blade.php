@extends('layouts.app_admin')

@section('content')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.admin_sidebar')

    <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">


            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Update Product</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Name</label>
                                        <input type="text" name="product_name" class="form-control" id="exampleInputPassword1" value="{{$product->product_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Product Description</label>
                                        <textarea class="form-control" name="product_description" id="exampleFormControlTextarea1" rows="3">{{$product->product_description}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Brand</label>
                                        <select name="product_brand" id="" class="form-control">
                                            @php $brands = \App\Models\Brand::orderBy('brand_name','asc')->get() @endphp
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Category</label>
                                        <select name="product_category" id="" class="form-control">
                                            @php $categorys = \App\Models\Category::orderBy('category_name','asc')->get() @endphp
                                            @foreach($categorys as $category )
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Coupon</label>
                                        <select name="product_coupon" id="" class="form-control">
                                            @php $coupons = \App\Models\Coupon::orderBy('coupon_code','asc')->get() @endphp
                                            @foreach($coupons as $coupon )
                                                <option value="{{$coupon->id}}">{{$coupon->coupon_code}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Stock</label>
                                        <input type="text" name="product_stock" class="form-control" id="exampleInputPassword1" value="{{$product->stock}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Size</label>
                                        <input type="text" name="product_size" class="form-control" id="exampleInputPassword1" value="{{$product->size}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Model</label>
                                        <input type="text" name="product_model" class="form-control" id="exampleInputPassword1" value="{{$product->model}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Price</label>
                                        <input type="text" name="product_price" class="form-control" id="exampleInputPassword1" value="{{$product->product_price}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Tax</label>
                                        <input type="text" name="product_tax" class="form-control" id="exampleInputPassword1" value="{{$product->tax}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Manufacture</label>
                                        <input type="text" name="manufactured_by" class="form-control" id="exampleInputPassword1" value="{{$product->manufactured_by}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Color</label>
                                        <input type="text" name="product_color" class="form-control" id="exampleInputPassword1" value="{{$product->color}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Product Feature Image</label>
                                        <input type="file" name="feature_image" class="form-control-file" id="exampleFormControlFile1">
                                        <span><img src="{{url('images',$product->feature_image)}}" alt="" width="80"></span>
                                    </div>

                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Save Change</button>
                                </div>
                            </form>
                        </div><!-- /.box -->

                    </div>
                </div>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
@endsection
