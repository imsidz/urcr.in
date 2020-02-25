@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <a href="/admin/size/create" class="btn btn-info float-right">Add New Size</a>
            <h3>Size Lists</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Name</th>
                        <th width="5%">Edit</th>
                        <th width="5%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sizes as $index => $size)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td>{{ $size->name }}</td>
                        <td><a href="/admin/size/{{ $size->slug }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                        <td>
                            <form action="/admin/size/{{ $size->slug }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    {!! $sizes->render() !!}
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
