@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="/admin/size/{{ $size->slug }}/edit" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="name" id="title" class="form-control" placeholder="Name"
                        aria-describedby="title" value="{{ $size->name }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush
