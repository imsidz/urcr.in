@extends('layouts.app')

@section('content')
    <h1>Order Success</h1>
    Order ID : {{ $order->orderId }}
@endsection