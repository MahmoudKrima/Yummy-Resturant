@extends("admin.master")
@section("content")
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <table>
              <!-- /.card-header -->
              <div class="card-body p-0 ">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Twitter</th>
                      <th>Facebook</th>
                      <th>Instagram</th>
                      <th>Linkedin</th>
                      <th>Controls</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($team as $teams)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$teams->name}}</td>
                      <td>{{$teams->position}}</td>
                      <td>
                        <img src='{{asset("images/$teams->image")}}' width="70px" height="70px" alt="">
                      </td>
                      <td>{{$teams->description}}</td>
                      <td>{{$teams->twitter}}</td>
                      <td>{{$teams->facebook}}</td>
                      <td>{{$teams->instgrame}}</td>
                      <td>{{$teams->linkedin}}</td>
                      <td>
                        <a href="{{route('team.edit',$teams->id)}}" class="btn btn-warning m-2">Edit</a>
                        <form action="{{route('team.destroy',$teams->id)}}" method='POST' style="float: left;" class="m-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </table>
        </div>
          </div>
        </div>
      </div>
  </div>
@endsection
