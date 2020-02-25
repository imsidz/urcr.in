@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <a href="/admin/request/customer/create" class="btn btn-info float-right">Add New Request</a>
            <h3>Customer Product Request Lists</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Image</th>
                        <th>Categories</th>
                        <th>Materials</th>
                        <th>Accepted By</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requests as $index => $product)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td><img src="{{ $product->image }}" alt="{{ $product->image }}" width="150"></td>
                        <td>
                            @foreach ($product->subchildcategories as $child)
                            <li>
                                {{ $child->name }}
                            </li>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($product->materials as $material)
                            <li>
                                {{ $material->name }}
                            </li>
                            @endforeach
                        </td>
                        <td>
                            @if ($product->seller)
                            {{ $product->seller->company }}
                            @else
                            Not Accepted Yet
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    {!! $requests->render() !!}
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
