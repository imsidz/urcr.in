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
                            <th width="5%">Edit</th>
                            <th width="5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($orders as $order)
                           <tr>
                           <td>{{ $order->id }}</td>
                           </tr>
                       @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection