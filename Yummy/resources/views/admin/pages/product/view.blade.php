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
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Controls</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>
                                                    <img src='{{ asset("images/$product->image") }}' width="70px"
                                                        height="70px" alt="">
                                                </td>
                                                <td>{{ $product->description }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>
                                                    @foreach ($categories as $category)
                                                        @if ($product->category_id == $category->id)
                                                            {{ $category->name }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{ route('product.edit', $product->id) }}"
                                                        class="btn btn-warning m-2">Edit</a>
                                                    <form action="{{ route('product.destroy', $product->id) }}"
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
