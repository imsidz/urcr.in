@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <h3>Order Lists</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Seller</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>
                            @foreach ($order->products as $product)
                            <li>
                                {{  $product->title }} | {{ $product->size }} | {{ $product->color }}
                            </li>
                            @endforeach
                        </td>
                        <td>
                            <img src="{{ $product->image }}" alt="" width="150">
                        </td>
                        <td>
                            {{ $product->seller }}
                        </td>
                    </tr>
                    @endforeach
                    {!! $orders->render() !!}
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
