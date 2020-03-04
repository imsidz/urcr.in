@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#add">
              Add Child Categories
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Sub Child Categories to {{ $childcategory->childcategory->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="/admin/mega-menu/{{ $menu->id }}/{{ $category->id }}/{{ $subcategory->id }}/{{ $childcategory->id }}/subchildcategory" method="POST">
                                @csrf
                                <label for="">Select Sub Child Categories</label>
                                <div class="form-group">
                                    <select name="subchildcategories[]" id="" class="select2 w-100" multiple>
                                        @foreach ($subchildcategories as $sub)
                                            <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                        @endforeach
                                    </select>
                                  {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <a href="/admin/mega-menu/3/1/subcategory" class="btn btn-info float-right">Add New Mega Menu</a> --}}
            <h3>ChildCategory Lists to {{ $category->category->name }} || {{ $subcategory->subcategory->name }} || {{ $childcategory->childcategory->name }}</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>SubCategory Name</th>
                        <th width="5%">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subchildmenus as $index => $subc)
                        <tr>
                            <td>
                                {{ $index + 1 }}
                            </td>
                            <td>
                                {{ $subc->subchildcategory->name }}
                            </td>
                            
                            <td></td>
                        </tr>
                    @endforeach
                    
                    {!! $subchildmenus->render() !!}
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