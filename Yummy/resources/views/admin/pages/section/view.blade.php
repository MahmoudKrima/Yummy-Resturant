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
                                            <th>Icon Image</th>
                                            <th>Title</th>
                                            <th>Body</th>
                                            <th>Controls</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sections as $section)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset("images/$section->icon_image") }}" alt=""
                                                        width="75px" height="75px">
                                                </td>
                                                <td>{{ $section->title }}</td>
                                                <td>{{ $section->body }}</td>
                                                <td>
                                                    <a href="{{ route('section.edit', $section->id) }}"
                                                        class="btn btn-warning m-2">Edit</a>
                                                    <form action="{{ route('section.destroy', $section->id) }}"
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
