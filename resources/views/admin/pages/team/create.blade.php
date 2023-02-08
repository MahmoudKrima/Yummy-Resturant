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
                            <h3 class="card-title">Add New Member</h3>
                        </div>
                    <form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="inputEmail3" placeholder="Enter Member Name">
                      </div>
                      <div class="card-body">
                            <input type="text" name="position" value="{{old('position')}}" class="form-control" id="inputEmail3" placeholder="Enter Member Position">
                      </div>
                      <div class="card-body">
                            <input type="text" name="description" value="{{old('description')}}" class="form-control" id="inputEmail3" placeholder="Enter Member Description">
                      </div>
                      <div class="card-body">
                            <input type="text" name="twitter" value="{{old('twitter')}}" class="form-control" id="inputEmail3" placeholder="Enter Member twitter">
                      </div>
                      <div class="card-body">
                            <input type="text" name="facebook" value="{{old('facebook')}}" class="form-control" id="inputEmail3" placeholder="Enter Member facebook">
                      </div>
                      <div class="card-body">
                            <input type="text" name="instgram" value="{{old('instgram')}}" class="form-control" id="inputEmail3" placeholder="Enter Member instgram">
                      </div>
                      <div class="card-body">
                            <input type="text" name="linkedin" value="{{old('linkedin')}}" class="form-control" id="inputEmail3" placeholder="Enter Member linkedin">
                      </div>
                      <div class="card-body">
                            <input type="file" name="image" id="inputEmail3">
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info">Add New Member</button>
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
