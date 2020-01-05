@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="card">
            <div class="card-header">
                    <a href="/admin/childcategory/create" class="btn btn-info float-right">Add New Child Category</a><h3>Child Category Lists</h3> 
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th width="5%">Edit</th>
                            <th width="5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($childs as $index => $sub)
                            <tr>
                                <td scope="row">{{ $index + 1 }}</td>
                                <td>{{ $sub->name }}</td>
                                <td><img src="{{ $sub->image }}" width="150"></td>
                                <td><a href="/admin/category/{{ $sub->slug }}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                <td><a href="/admin/category/{{ $sub->slug }}/edit" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection