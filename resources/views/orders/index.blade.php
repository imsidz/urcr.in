@extends('layouts.app')

@section('content')
<div class="banner-slider banner-shop-slider bg-slider">
    <div class="wrap-item" data-pagination="false" data-autoplay="true" data-transition="fade" data-navigation="false"
        data-itemscustom="[[0,1]]">
        <div class="item-slider">
            <div class="banner-thumb"><a href="#"><img src="/images/shop/shop-banner1.jpg" alt="" /></a></div>

        </div>

    </div>
</div>
<!-- End Banner Slider -->
<div class="bread-crumb">
    <div class="container">
        <a href="/">Home</a> <span>Orders</span>
    </div>
</div>
<div class="content-pages">
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order Id</th>
                        <th>Products</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $index => $order)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td>{{ $order->orderId }}</td>
                        <td>
                            @foreach ($order->products as $product)
                            <li>
                                <img src="{{ $product->image }}" alt="{{ $product->title }}" width="75">
                                {{ $product->title }}
                            </li>
                            @endforeach
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
