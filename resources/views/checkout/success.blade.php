@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center" style="padding-top:100px;">
        <h1 class="display-3">Thank You!</h1>
        <p class="lead"><strong>Order ID : {{ $order->orderId }}</strong> </p>
        <hr>
        <p>
          Having trouble? <a href="/contact">Contact us</a>
        </p>
        <p class="lead">
          <a class="btn btn-primary btn-sm" href="/" role="button">Continue to homepage</a>
        </p>
      </div>
    
@endsection