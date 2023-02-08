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
                            <h3 class="card-title">Edit Member</h3>
                        </div>
                    <form action="{{route('team.update',$team->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="card-body">
                            <input type="text" name="name" value="{{$team->name}}" class="form-control" id="inputEmail3" placeholder="Enter Member Name">
                      </div>
                      <div class="card-body">
                            <input type="text" name="position" value="{{$team->position}}" class="form-control" id="inputEmail3" placeholder="Enter Member Position">
                      </div>
                      <div class="card-body">
                            <input type="text" name="description" value="{{$team->description}}" class="form-control" id="inputEmail3" placeholder="Enter Member Description">
                      </div>
                      <div class="card-body">
                            <input type="text" name="twitter" value="{{$team->twitter}}" class="form-control" id="inputEmail3" placeholder="Enter Member twitter">
                      </div>
                      <div class="card-body">
                            <input type="text" name="facebook" value="{{$team->facebook}}" class="form-control" id="inputEmail3" placeholder="Enter Member facebook">
                      </div>
                      <div class="card-body">
                            <input type="text" name="instgram" value="{{$team->instgrame}}" class="form-control" id="inputEmail3" placeholder="Enter Member instgrame">
                      </div>
                      <div class="card-body">
                            <input type="text" name="linkedin" value="{{$team->linkedin}}" class="form-control" id="inputEmail3" placeholder="Enter Member linkedin">
                      </div>
                      <div class="card-body">
                            <input type="file" value="{{asset("images/>$team->image")}}" name="image" id="inputEmail3">
                        </div>
                        <center>
                        <span>Old Image : </span>
                        <img width="100px" height="100px" src="{{asset("images/$team->image")}}" alt="">
                    </center>
                        <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info">Edit Member</button>
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
