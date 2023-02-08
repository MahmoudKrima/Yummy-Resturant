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
                      <th>email</th>
                      <th>phone</th>
                      <th>date</th>
                      <th>time</th>
                      <th>No.People</th>
                      <th>message</th>
                      <th>Controls</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tables as $table)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$table->name}}</td>
                      <td>{{$table->email}}</td>
                      <td>{{$table->phone}}</td>
                      <td>{{$table->date}}</td>
                      <td>{{$table->time}}</td>
                      <td>{{$table->people}}</td>
                      <td>{{$table->message}}</td>
                      <td>
                        <form action="{{route('table',$table->id)}}" method='POST' style="float: left;" class="m-2">
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
