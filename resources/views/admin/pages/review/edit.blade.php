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
                            <h3 class="card-title">Edit Review</h3>
                        </div>
                        <form action="{{ route('review.update', $review->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <input type="text" name="name" value="{{ $review->name }}" class="form-control"
                                    id="inputEmail3" placeholder="Enter Review Name">
                            </div>
                            <div class="card-body">
                                <input type="text" name="position" value="{{ $review->position }}" class="form-control"
                                    id="inputEmail3" placeholder="Enter Review Position">
                            </div>
                            <div class="card-body">
                                <input type="text" name="content" value="{{ $review->content }}"
                                    class="form-control" id="inputEmail3" placeholder="Enter Review Content">
                            </div>
                            <div class="card-body">
                                <input type="file" value="{{ asset("images/>$review->image") }}" name="image"
                                    id="inputEmail3">
                            </div>
                            <center>
                                <span>Old Image : </span>
                                <img width="100px" height="100px" src="{{ asset("images/$review->image") }}" alt="">
                            </center>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Edit Review</button>
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
