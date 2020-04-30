@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#add">
                Add Categories
            </button>

            <!-- Modal -->
            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Categories to {{ $menu->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/admin/mega-menu/{{ $menu->id }}/category" method="POST">
                                @csrf
                                <label for="">Select Categories</label>
                                <div class="form-group">
                                    <select name="categories[]" id="" class="select2 w-100 form-control" multiple>
                                        @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                </div>
                                <button type="button" class="btn btn-warning float-right"
                                    data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <a href="/admin/mega-menu/3/1/subcategory" class="btn btn-info float-right">Add New Mega Menu</a> --}}
            {{-- <h3>ChildCategory Lists to {{ $category->category->name }} || {{ $subcategory->subcategory->name }}
            </h3> --}}
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Category Name</th>
                        <th width="10%">Child Category</th>
                        <th width="5%">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catemegamenus as $index => $cat)
                    <tr>
                        <td>
                            {{ $cat->id + 1 }}
                        </td>
                        <td>
                            {{ $cat->category->name }}
                        </td>
                        <td>

                            <a href="/admin/mega-menu/{{ $menu->id }}/{{ $cat->id }}/subcategory"
                                class="btn btn-sm btn-primary">Manage SubCategories</a>
                        </td>

                        <td>
                            <form action="/admin/mega-menu/{{ $menu->id }}/{{ $cat->id }}/remove" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach

                    {!! $catemegamenus->render() !!}
                </tbody>
            </table>
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
