@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-body">
            <form action="/admin/subcategory/{{ $sub->slug }}/edit" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="name" id="title" class="form-control" placeholder="Name"
                        value="{{ $sub->name }}" aria-describedby="titl">
                </div>

                <div class="form-group">
                    <label>Select Category</label>
                    <select name="category" class="form-control">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id == $sub->category->id) selected
                            @endif>{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="">Select Image</label>
                    <br>
                    <input type="file" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
@endpush
