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
                            <h3 class="card-title">Add New Product</h3>
                        </div>
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    id="inputEmail3" placeholder="Enter Product Name">
                            </div>
                            <div class="card-body">
                                <input type="text" name="price" value="{{ old('price') }}" class="form-control"
                                    id="inputEmail3" placeholder="Enter Product price">
                            </div>
                            <div class="card-body">
                                <input type="text" name="description" value="{{ old('description') }}"
                                    class="form-control" id="inputEmail3" placeholder="Enter Product Description">
                            </div>
                            <div class="card-body">
                                <select class="form-control" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
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
                                <button type="submit" class="btn btn-info">Add New Product</button>
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
