@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">

            <h3>Product Requests Lists</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Name</th>
                        <th width="5%">Seller</th>
                        <th width="5%">Show Details</th>
                        <th width="5%">Approve</th>
                        <th width="5%">Decline</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $product)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->seller->company }}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <a href="/admin/request/product/{{ $product->slug }}"
                                class="btn btn-primary btn-sm">Show</a>

                        </td>
                        <td>
                            <form action="/admin/request/product/{{ $product->slug }}/approve" method="POST">
                                @csrf
                                <button class="btn btn-sm btn-success">Approve</button>
                            </form>
                        </td>
                        <td><button class="btn btn-sm btn-danger">Decline</button></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
