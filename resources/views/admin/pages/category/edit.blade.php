@extends("admin.master")
@section("content")
@include('admin.errors')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Category</h3>
                    </div>
                <form action="{{route('categories.update',$category->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                  <div class="card-body">
                        <input type="text" name="name" value="{{$category->name}}" class="form-control" id="inputEmail3" placeholder="Enter Category Name">
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Edit  Category</button>
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
