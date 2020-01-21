@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="card">
            <div class="card-header">
                <h3>Seller Lists</h3> 
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Company</th>
                            <th>Name</th>
                            <th>Join At</th>
                            <th width="5%">Approve</th>
                            <th width="5%">Decline</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sellers as $index => $seller)
                            <tr>
                                <td scope="row">{{ $index }}</td>
                                <td>{{ $seller->company }}</td>
                                <td>{{ $seller->name }}</td>
                                <th> {{ $seller->created_at->diffForHumans() }} </th>
                                <td>
                                    <form action="/admin/seller-request/approve" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $seller->id }}" name="seller">
                                        <button type="submit" class="btn btn-success">Approve</button>
                                    </form>
                                </td>
                                <td>
                                    <button class="btn btn-danger">Decline</button>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection