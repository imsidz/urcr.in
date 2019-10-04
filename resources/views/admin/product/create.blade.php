
@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
            <form action="/admin/products/create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="titl">
                </div>
                
                <div class="form-group">
                    <label for="description">Short Description</label>
                    <textarea class="ckeditor" name="short" id="description" rows="3"></textarea>
                  </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="ckeditor" name="description" id="description" rows="3"></textarea>
                </div>

                <div class="form-group">
                  <label for="description">Full Details</label>
                  <textarea class="ckeditor" name="full" id="description" rows="3"></textarea>
                </div>
              
                
                <div class="form-group">
                  <label for="mrp">MRP</label>
                  <input type="text" name="mrp" id="mrp" class="form-control" placeholder="MRP" aria-describedby="mrp">
                </div>

                <div class="form-group">
                  <label for="price">Selling Price</label>
                  <input type="text" name="price" id="price" class="form-control" placeholder="Selling price" aria-describedby="helpId">
                </div>

                <div class="form-group">
                  <label for="">Select Sub Categories</label>
                  <select name="subcategories[]" class="subcategories form-control" multiple>
                    @foreach ($subcategories as $sub)
                      <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="image">Select Images</label>
                  <input type="file" class="form-control-file" name="image[]" id="image" placeholder="" aria-describedby="fileHelpId" multiple>
                  <small id="fileHelpId" class="form-text text-muted">Help text</small>
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
      $('.subcategories').select2();
  });
  </script>
@endpush