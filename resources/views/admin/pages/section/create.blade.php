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
                            <h3 class="card-title">Add New Section</h3>
                        </div>
                        <form action="{{ route('section.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <label for="">Icon Image</label>
                                <input type="file" name="icon_image" class="form-control" id="inputEmail3">
                            </div>
                            <div class="card-body">
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                    id="inputEmail3" placeholder="Enter Section Title">
                            </div>
                            <div class="card-body">
                                <input type="text" name="body" class="form-control" value="{{ old('body') }}"
                                    placeholder="Enter Section Body" id="inputEmail3">
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Add New Section</button>
                                </div>
                                <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
