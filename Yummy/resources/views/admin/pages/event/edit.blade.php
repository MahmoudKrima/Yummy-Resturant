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
                            <h3 class="card-title">Edit Event</h3>
                        </div>
                        <form action="{{ route('event.update'),$event->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <label for="">Event Image</label>
                                <input type="file" name="image" class="form-control" id="inputEmail3">
                            </div>
                            <div class="card-body">
                                <input type="text" name="name" value="{{ $event->name }}" class="form-control"
                                    id="inputEmail3" placeholder="Enter Event Title">
                            </div>
                            <div class="card-body">
                                <input type="text" name="content" class="form-control" value="{{ $event->content }}"
                                    placeholder="Enter Event Content" id="inputEmail3">
                            </div>
                            <div class="card-body">
                                <input type="text" name="price" class="form-control" value="{{ $event->price }}"
                                    placeholder="Enter Event Price" id="inputEmail3">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Edit Event</button>
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
