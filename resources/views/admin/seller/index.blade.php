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
                            <th>Products</th>
                            <th>Show Details</th>
                            <th width="5%">Edit</th>
                            <th width="5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sellers as $index => $seller)
                            <tr>
                                <td scope="row">{{ $index }}</td>
                                <td>{{ $seller->company }}</td>
                                <td>{{ $seller->name }}</td>
                                <th>{{ $seller->products->count() }} </th>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#show-{{ $seller->id }}">
                                      Show
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="show-{{ $seller->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                
                                                <div class="modal-body">
                                                    table
                                                    Name: {{ $seller->name }} <br>
                                                    Email: {{ $seller->email }} <br>
                                                    Mobile: {{ $seller->mobile }} <br>
                                                    Categories: 
                                                    <br>
                                                    @foreach ($seller->categories as $category)
                                                      <strong>  {{ $category->name }} </strong><br>                                                        
                                                    @endforeach

                                                    Materials
                                                    <br>
                                                    @foreach ($seller->materials as $material)
                                                        <strong>{{ $material->name }}</strong> <br>
                                                    @endforeach
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-warning">Edit</button>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection