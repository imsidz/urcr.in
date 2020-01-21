@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="card">
            <div class="card-header">
                <h3>Seller Lists</h3> 
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Company</th>
                            <th>Name</th>
                            <th>Products</th>
                            <th width="5%">Edit</th>
                            <th width="5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sellers as $index => $seller)
                            <tr>
                                <td scope="row">{{ $index }}</td>
                                <td>{{ $seller->company }}</td>
                                <td>{{ $seller->name }}</td>
                                <th> {{ $seller->products->count() }} </th>
                                <td>
                                    <button class="btn btn-warning">Edit</button>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection