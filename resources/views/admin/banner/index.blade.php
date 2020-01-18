@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="card">
            <div class="card-header">
                    <a href="/admin/banners/create" class="btn btn-info float-right">Add New Banner</a><h3>Banner Lists</h3> 
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>title</th>
                            <th >Active Status</th>
                            <th width="15">Image</th>
                            <th width="5%">Edit</th>
                            <th width="5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $index => $banner)
                            <tr>
                                <td scope="row">{{ $index + 1 }}</td>
                                <td>{{ $banner->title }}</td>
                                <td> @if($banner->active) Active @else Deactive @endif</td>
                                <td><img src="{{ $banner->image }}" alt="{{ $banner->title }}" width="150"></td>
                                <td><a href="/admin/banners/{{ $banner->id }}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                <td>
                                    <form action="/admin/banners/{{ $banner->id }}/delete" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>   
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