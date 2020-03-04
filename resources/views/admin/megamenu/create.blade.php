
@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
            <form action="/admin/mega-menu/create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Name</label>
                  <input type="text" name="name" id="title" class="form-control" placeholder="Name" aria-describedby="titl">
                </div>

                <label for="">Select Categories</label>
                <div class="form-group">
                    <select name="categories[]" id="" class="select2 w-100" multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
        
    </div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
      $('.select2').select2();
  });
</script>
@endpush