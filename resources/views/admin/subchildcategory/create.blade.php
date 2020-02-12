
@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
            <form action="/admin/subchildcategory/create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Name</label>
                  <input type="text" name="name" id="title" class="form-control" placeholder="Name" aria-describedby="titl">
                </div>

                <div class="form-group">
                  <label>Select Child Category</label>
                  <select name="category" class="form-control">
                      @foreach ($childcategories as $child)
                        <option value="{{ $child->id }}">{{ $child->name }}</option>
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
