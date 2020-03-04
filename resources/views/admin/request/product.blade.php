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
                        {{-- <td>{{ $product->seller->company }}</td> --}}
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#show-{{ $product->id }}">
                                Show
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="show-{{ $product->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $product->title }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>Images</h5>
                                            @foreach ($product->photos as $image)
                                            <img src="{{ $image->link }}" alt="{{ $product->title }}" width="150">
                                            @endforeach

                                            <h5>Description</h5>
                                            {!! $product->description !!}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <form action="/admin/request/product/{{ $product->id }}/approve"
                                                method="POST">
                                                @csrf
                                                <button class="btn btn-sm btn-success">Approve</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <form action="/admin/request/product/{{ $product->id }}/approve" method="POST">
                                @csrf
                                <button class="btn btn-sm btn-success">Approve</button>
                            </form>
                        </td>
                        <td><button class="btn btn-sm btn-danger">Decline</button></td>
                    </tr>
                    @endforeach
                    {{ $products->render() }}
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
