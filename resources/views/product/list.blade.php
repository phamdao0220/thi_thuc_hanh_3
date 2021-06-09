@extends('layout.home')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                        <a href="" class="btn btn-success">
                            <i class="fas fa-plus-square"> Add New Products</i>
                        </a>
                        <div class="card-tools">
                            <form action="" method="post">
                                @csrf
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="search" class="form-control float-right"
                                               placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="card-header">
                            <h3 class="card-title">List Of Products</h3>
                        </div>
                        <div class="card-body ">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product_id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Type_code</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--@foreach($products as $key => $product)--}}
                                    {{--<tr>--}}
                                        {{--<th>{{$key++}}</th>--}}
                                        {{--<td>{{$product->product_id}}</td>--}}
                                        {{--<td>{{$product->name}}</td>--}}
                                        {{--<td>{{$product->price}}</td>--}}
                                        {{--<td><img width="100px" src="{{asset('storage/'.$product->img)}}"></td>--}}
                                        {{--<td>--}}
                                        {{--<a href="{{route('add.product')}}"><i class="fas fa-address-book"></i></a>--}}
                                        {{--<a href="{{route('edit.product',$product->id)}}"><i class="fas fa-edit"></i>--}}
                                        {{--</a>--}}
                                        {{--<a onclick="return confirm('ban co chac muon xoa {{$product->name}} khong?? ')"--}}
                                        {{--href="{{route('delete.product',$product->id)}}">--}}
                                        {{--<i class="fa fa-trash" aria-hidden="true"></i></a>--}}

                                        {{--</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Product_id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Type_code</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
