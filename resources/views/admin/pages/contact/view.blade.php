@extends("admin.master")
@section("content")
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card">
                <table>
              <!-- /.card-header -->
              <div class="card-body p-0 ">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>email</th>
                      <th>subject</th>
                      <th>message</th>
                      <th>Controls</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($messages as $message)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$message->name}}</td>
                      <td>{{$message->email}}</td>
                      <td>{{$message->subject}}</td>
                      <td>{{$message->message}}</td>
                      <td>
                        <form action="{{route('message',$message->id)}}" method='POST' style="float: left;" class="m-2">
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
