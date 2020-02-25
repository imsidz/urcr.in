@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <a href="/admin/subcategory/create" class="btn btn-info float-right">Add New Sub Category</a>
            <h3>Sub Category Lists</h3>
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
                    @foreach ($subs as $index => $sub)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td>{{ $sub->name }}</td>
                        <td><img src="{{ $sub->image }}" width="150"></td>
                        <td><a href="/admin/category/{{ $sub->slug }}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                        <td>
                            <form action="/admin/subcategory/{{ $sub->slug }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    {!! $subs->render() !!}
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
