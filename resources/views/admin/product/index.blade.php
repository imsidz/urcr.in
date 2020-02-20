@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <a href="/admin/products/create" class="btn btn-info float-right">Add New Product</a>
            <h3>Product Lists</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th width="5%">Edit</th>
                        <th width="5%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $product)
                    <tr>
                        <td scope="row">{{ $index }}</td>
                        <td>{{ $product->title }}</td>

                        <td><img src="{{ $product->photos->first()['link'] }}" alt="{{ $product->title }}" width="200">
                        </td>
                        <td>
                            <a href="/admin/products/{{ $product->slug }}/edit" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="/admin/products/{{ $product->slug }}/delete" method="POST">
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
    </div>

</div>
@endsection
