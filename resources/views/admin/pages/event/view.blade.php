@extends('admin.master')
@section('content')
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
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Content</th>
                                            <th>Price</th>
                                            <th>Controls</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($events as $event)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset("images/$event->image") }}" alt=""
                                                        width="75px" height="75px">
                                                </td>
                                                <td>{{ $event->name }}</td>
                                                <td>{{ $event->content }}</td>
                                                <td>{{ $event->price }}</td>
                                                <td>
                                                    <a href="{{ route('event.edit', $event->id) }}"
                                                        class="btn btn-warning m-2">Edit</a>
                                                    <form action="{{ route('event.destroy', $event->id) }}" method='POST'
                                                        style="float: left;" class="m-2">
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
