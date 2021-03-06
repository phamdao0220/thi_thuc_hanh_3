@extends('layout.home')
@section('page_title')
@endsection
@section('content')
    <div class="card mt-2">
        <div class="card-header">
            Edit Product
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('update.product', $product->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" value="{{ $product->price }}" name="description" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Type</label>
                    <input type="text" value="{{ $product->type_code }}" name="content" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
