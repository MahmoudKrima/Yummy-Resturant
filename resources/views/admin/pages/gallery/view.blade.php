@extends('admin.master')
@section('content')
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
                                            <th>Image</th>
                                            <th>Controls</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($galleries as $gallery)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img width="150px" height="100px" src="{{ asset("images/$gallery->image") }}" alt="">
                                                </td>
                                                <td>
                                                    <a href="{{ route('gallery.edit', $gallery->id) }}"
                                                        class="btn btn-warning m-2">Edit</a>
                                                    <form action="{{ route('gallery.destroy', $gallery->id) }}"
                                                        method='POST' style="float: left;" class="m-2">
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
