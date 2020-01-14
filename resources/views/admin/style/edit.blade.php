
@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
            <form action="/admin/style/{{ $style->slug }}/edit" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="title">Name</label>
                  <input type="text" name="name" id="title" class="form-control" placeholder="Name" aria-describedby="titl" value="{{ $style->name }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
        
    </div>
@endsection

@push('scripts')
@endpush