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
                            <h3 class="card-title">Add New Review</h3>
                        </div>
                        <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    id="inputEmail3" placeholder="Enter Review Name">
                            </div>
                            <div class="card-body">
                                <input type="text" name="position" value="{{ old('position') }}" class="form-control"
                                    id="inputEmail3" placeholder="Enter Review Position">
                            </div>
                            <div class="card-body">
                                <input type="text" name="content" value="{{ old('content') }}"
                                    class="form-control" id="inputEmail3" placeholder="Enter Review Content">
                            </div>
                            <div class="card-body">
                                <input type="file" name="image" id="inputEmail3">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Add New Review</button>
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
