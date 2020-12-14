@extends('layouts.app_admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layouts.admin_blade_title', [
                'title' => 'Manage Product'
            ])

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">

                        <thead style="background-color: #000;color:#fff">
                        <tr>
                            <th>SL</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Brand</th>
                            <th>Product Stock</th>
                            <th>Product Size</th>
                            <th>Product Price</th>
                            <th>Product Created</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $index => $product)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td><img src="{{url('images',$product->feature_image)}}" alt="{{$product->product_name}}" width="80"></td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->brand->brand_name}}</td>
                                <td>{{$product->stock}} piece(s) </td>
                                <td>{{$product->size}}</td>
                                <td>BDT {{$product->product_price}}</td>
                                <td>{{\Carbon\Carbon::parse($product->created_at)->format('M d Y')}}</td>
                                <td class="text-center">
                                    <form action="{{ route('product.change.status') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="status" value="{{$product->status}}">
                                        <input type="hidden" name="id" value="{{$product->id}}">

                                        @if($product->status == 1)
                                            <button type="submit" class="btn btn-success">Active</button>
                                        @else
                                            <button type="submit" class="btn btn-danger">Inactive</button>
                                        @endif
                                    </form>
                                </td>
                                <td>
                                    <a href="{{route('product.edit',$product->id)}}" class="btn text-warning btn-app float-left">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="" class="btn btn-app text-danger float-left" data-toggle="modal" data-target="#exampleModal{{$product->id}}">
                                        <i class="fa fa-trash fa-2x"></i> DELETE
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Do You Want to Delete !!!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('product.destroy',$product->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger">Confirm</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Brand</th>
                                        <th>Product Stock</th>
                                        <th>Product Size</th>
                                        <th>Product Price</th>
                                        <th>Product Created</th>
                                        <th>Action</th>
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
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
