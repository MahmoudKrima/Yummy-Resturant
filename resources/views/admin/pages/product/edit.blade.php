@extends('admin.master')
@section('content')
    <!-- Main content -->
    <!-- Main content -->
    @include('admin.errors')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit Product</h3>
                        </div>
                        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                                    id="inputEmail3" placeholder="Enter Product Name">
                            </div>
                            <div class="card-body">
                                <input type="text" name="price" value="{{ $product->price }}" class="form-control"
                                    id="inputEmail3" placeholder="Enter Product price">
                            </div>
                            <div class="card-body">
                                <input type="text" name="description" value="{{ $product->description }}"
                                    class="form-control" id="inputEmail3" placeholder="Enter Product Description">
                            </div>
                            <div class="card-body">
                                <select class="form-control" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if($product->category_id == $category->id) {{"selected"}} @endif>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-body">
                                <label for="">Product Image : </label>
                                <input type="file" name="image" id="inputEmail3">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Edit Product</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
