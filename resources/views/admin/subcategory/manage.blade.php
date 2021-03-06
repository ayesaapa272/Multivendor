@extends('layouts.app_admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layouts.admin_blade_title', [
                'title' => 'Manage Sub Category'
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
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Category Name</th>
                                        <th>Sub Category Name</th>
                                        <th>Status</th>
                                        <th>Create At</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if( ! empty($subCategories) )
                                        @foreach($subCategories as $index => $subCategory)
                                            <tr>
                                                <td>{{$index + 1}}</td>
                                                <td>
                                                    <img src="{{url('images/' . $subCategory->sub_category_image)}}" alt="{{$subCategory->subcategory_name}}" class="img-rounded" width="80">
                                                </td>
                                                <td>{{$subCategory->category->category_name}}</td>
                                                <td>{{$subCategory->subcategory_name}}</td>
                                                <td>
                                                    <form action="{{ route('subcategory.change.status') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="status" value="{{$subCategory->status}}">
                                                        <input type="hidden" name="id" value="{{$subCategory->id}}">

                                                        @if($subCategory->status == 1)
                                                            <button type="submit" class="btn btn-success">Active</button>
                                                        @else
                                                            <button type="submit" class="btn btn-danger">Inactive</button>
                                                        @endif
                                                    </form>
{{--                                                    @if($subCategory->status == 1)--}}
{{--                                                        <span class="btn btn-success">Active</span>--}}
{{--                                                    @endif--}}

{{--                                                    @if($subCategory->status == 0)--}}
{{--                                                        <span class="btn btn-danger">InActive</span>--}}
{{--                                                    @endif--}}
                                                </td>
                                                <td>{{\Carbon\Carbon::parse($subCategory->created_at)->format('M d Y')}}</td>
                                                <td>
            {{--                                        <a href="{{route('subcategory.edit',$subCategory->id)}}" class="btn text-warning btn-app float-left">--}}
            {{--                                            <i class="fas fa-edit"></i> Edit--}}
            {{--                                        </a>--}}
            {{--                                        <a href="" class="btn btn-app text-danger float-left" data-toggle="modal" data-target="#exampleModal{{$subCategory->id}}">--}}
            {{--                                            <i class="fa fa-trash fa-2x"></i> DELETE--}}
            {{--                                        </a>--}}
                                                    <a href="{{route('subcategory.edit',$subCategory->id)}}" class="btn text-warning btn-app float-left">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a href="" class="btn btn-app text-danger float-left" data-toggle="modal" data-target="#exampleModal{{$subCategory->id}}">
                                                        <i class="fa fa-trash fa-2x"></i> DELETE
                                                    </a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{$subCategory->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Do You Want to Delete !!!</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{route('subcategory.destroy',$subCategory->id)}}" method="post">
                                                                        @csrf
                                                                        @method("DELETE")
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
                                        @endif
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Category Name</th>
                                        <th>Sub Category Name</th>
                                        <th>Sub Category Status</th>
                                        <th>Create At</th>
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
