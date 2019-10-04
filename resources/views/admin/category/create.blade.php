
@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
            <form action="/admin/category/create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Name</label>
                  <input type="text" name="name" id="title" class="form-control" placeholder="Name" aria-describedby="titl">
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