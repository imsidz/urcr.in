
@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
            <form action="/admin/banners/{{ $banner->id }}/edit" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Name" aria-describedby="title" value="{{ $banner->title }}">
                </div>

                <div class="form-group">
                  <label for="">URL</label>
                  <input type="text" name="url" id="" class="form-control" placeholder="URL (Optional)" aria-describedby="helpId" value="{{ $banner->url }}">
                  {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                </div>

                <div class="form-group">
                  <img src="{{ $banner->image }}" alt="{{ $banner->title }}" width="150" class="float-right">
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