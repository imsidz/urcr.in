@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="/admin/request/customer/create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="form-group col-md-4">
                        <label for="title">Select Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Select Category</label>
                        <select name="categories[]" id="" class="form-control select2" multiple>
                            @foreach ($categories as $category)

                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Select Materials</label>
                        <select name="materials[]" id="" class="form-control select2" multiple>
                            @foreach ($materials as $material)

                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                            @endforeach
                        </select>
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>
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
