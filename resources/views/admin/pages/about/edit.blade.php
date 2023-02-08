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
                            <h3 class="card-title">Edit About</h3>
                        </div>
                    <form action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="card-body">
                            <label for="">Main Image</label>
                            <input type="file" name="main_image" class="form-control" id="inputEmail3">
                      </div>
                      <div class="card-body">
                        <label for="">Side Image</label>
                            <input type="file" name="side_image"  class="form-control" id="inputEmail3">
                      </div>
                      <div class="card-body">
                            <input type="text" name="title" value="{{$about->title}}" class="form-control" id="inputEmail3" placeholder="Enter About Title">
                      </div>
                      <div class="card-body">
                            <input type="text" name="body" class="form-control" value="{{$about->body}}" placeholder="Enter About Body" id="inputEmail3">
                      </div>
                      <div class="card-body">
                            <input type="text" name="footer" class="form-control" value="{{$about->footer}}" placeholder="Enter About Footer" id="inputEmail3">
                      </div>
                      <div class="card-body">
                            <input type="text" name="phone" class="form-control" value="{{$about->phone}}" placeholder="Enter About Phone" id="inputEmail3">
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info">Edit About</button>
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
