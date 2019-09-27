@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="card">
            <div class="card-header">
                    <a href="/admin/products/create" class="btn btn-info float-right">Add New Product</a><h3>Product Lists</h3> 
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr>
                                <td scope="row">{{ $index }}</td>
                                <td>{{ $product->title }}</td>
                                <td><img src="{{ $product->photos->first()['link'] }}" alt="{{ $product->title }}"></td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection