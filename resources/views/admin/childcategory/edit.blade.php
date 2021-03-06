@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-body">
            <form action="/admin/childcategory/{{ $child->slug }}/edit" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="name" id="title" class="form-control" placeholder="Name"
                        value="{{ $child->name }}" aria-describedby="titl">
                </div>

                <div class="form-group">
                    <label>Select Sub Category</label>
                    <select name="category" class="form-control">
                        @foreach ($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}" @if($subcategory->id ==
                            $child->subcategory->id) selected @endif>{{ $subcategory->name }}</option>
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
@endpush
