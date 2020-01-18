
@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
            <form action="/admin/banners/create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Name" aria-describedby="titl">
                </div>

                <div class="form-group">
                  <label for="">URL</label>
                  <input type="text" name="url" id="" class="form-control" placeholder="URL (Optional)" aria-describedby="helpId">
                  {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                </div>

                <div class="form-group">
                  <label for="image">Select Image</label>
                  <input type="file" class="form-control-file" name="image" accept="image/*" id="image" placeholder="" aria-describedby="fileHelpId">
                  {{-- <small id="fileHelpId" class="form-text text-muted">Help text</small> --}}
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
        
    </div>
@endsection

@push('scripts')
@endpush