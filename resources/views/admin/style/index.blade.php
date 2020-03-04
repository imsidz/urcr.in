@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <a href="/admin/style/create" class="btn btn-info float-right">Add New Style</a>
            <h3>Style Lists</h3>
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
                    @foreach ($styles as $index => $style)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td>{{ $style->name }}</td>
                        <td><a href="/admin/style/{{ $style->slug }}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                        <td>
                            <form action="/admin/style/{{ $style->slug }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    {!! $styles->render() !!}
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
