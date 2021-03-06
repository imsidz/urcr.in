@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <a href="/admin/mega-menu/create" class="btn btn-info float-right">Add New Mega Menu</a>
            <h3>Mega Menu Lists</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Name</th>
                        <th>Categories</th>
                        <th>Add Sub Category</th>
                        <th width="5%">Status</th>
                        {{-- <th width="5%">Edit</th> --}}
                        <th width="5%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $index => $menu)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td>{{ $menu->name }}</td>
                        <td>
                            @foreach ($menu->categorymegamenus as $m)
                            <li>
                                {{$m->category->name}}
                            </li>
                            @endforeach
                        </td>
                        <td>
                            <a href="/admin/mega-menu/{{ $menu->id }}/category" class="btn btn-sm btn-primary">Manage
                                Category</a>
                        </td>
                        <td>
                            @if($menu->active)
                            <form action="/admin/mega-menu/{{ $menu->id}}/deactivate" method="POST">
                                @csrf
                                <button class="btn btn-danger btn-sm">Deactivate</button>
                            </form>
                            @else
                            <form action="/admin/mega-menu/{{ $menu->id}}/activate" method="POST">
                                @csrf
                                <button class="btn btn-success btn-sm">Activate</button>
                            </form>
                            @endif
                        </td>
                        {{-- <td><a href="/admin/mega-menu/{{ $menu->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        </td> --}}
                        <td>
                            <form action="/admin/mega-menu/{{ $menu->id }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    {!! $menus->render() !!}
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
