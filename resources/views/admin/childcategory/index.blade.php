@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <a href="/admin/childcategory/create" class="btn btn-info float-right">Add New Child Category</a>
            <h3>Child Category Lists</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Sub Category</th>
                        <th width="5%">Edit</th>
                        <th width="5%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($childs as $index => $child)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td>{{ $child->name }}</td>
                        <td><img src="{{ $child->image }}" width="150"></td>
                        <td>
                            {{ $child->subcategory->name }}
                        </td>
                        <td><a href="/admin/category/{{ $child->slug }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                        <td>
                            <form action="/admin/childcategory/{{ $child->slug }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    {!! $childs->render() !!}
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
