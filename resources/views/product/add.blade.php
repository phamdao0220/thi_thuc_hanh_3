@extends('layout.home')
@section('content')
    <section class="content">
        <form method="post" action="{{route('store.product')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" >Add New Product</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" name="name"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Price</label>
                                <input type="text" name="price"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="img">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Type</label>
                                <input type="text" name="type_code"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success"> Add</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </form>
    </section>
@endsection
