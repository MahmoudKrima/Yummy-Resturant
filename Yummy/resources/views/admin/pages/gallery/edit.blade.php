@extends('admin.master')
@section('content')
    @include('admin.errors')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit Gallery</h3>
                        </div>
                        <form action="{{ route('gallery.update', $gallery->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <input type="file" name="image" class="form-control" id="inputEmail3">
                                <center>
                                    <label for="">Old Image : </label>
                                    <img width="150px" height="100px" src="{{ asset("images/$gallery->image") }}"
                                        alt="" class="mt-2">
                                </center>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Edit Gallery</button>
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
