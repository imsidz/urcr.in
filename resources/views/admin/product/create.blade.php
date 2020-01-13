
@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css">
<link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.css">
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
                  <label for="">Select Child Category Categories</label>
                  <select name="categories[]" class="subcategories form-control" multiple>
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="image">Select Images</label>
                  <div class="dropzone" id="myDropzone"></div>
                  {{-- <input type="file" class="form-control-file" name="image[]" id="image" placeholder="" aria-describedby="fileHelpId" multiple> --}}
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
  <script src="https://unpkg.com/dropzone"></script>
  <script src="https://unpkg.com/cropperjs"></script>
  <script>
  Dropzone.options.myDropzone = {
	url: '/api/images',
	transformFile: function(file, done) {

		var myDropZone = this;

		// Create the image editor overlay
		var editor = document.createElement('div');
		editor.style.position = 'fixed';
		editor.style.left = 0;
		editor.style.right = 0;
		editor.style.top = 0;
		editor.style.bottom = 0;
		editor.style.zIndex = 9999;
		editor.style.backgroundColor = '#000';

		// Create the confirm button
		var confirm = document.createElement('button');
		confirm.style.position = 'absolute';
		confirm.style.left = '10px';
		confirm.style.top = '10px';
		confirm.style.zIndex = 9999;
		confirm.textContent = 'Confirm';
		confirm.addEventListener('click', function() {

			// Get the canvas with image data from Cropper.js
			var canvas = cropper.getCroppedCanvas({
				width: 600,
				height: 600
			});

			// Turn the canvas into a Blob (file object without a name)
			canvas.toBlob(function(blob) {

				// Update the image thumbnail with the new image data
				myDropZone.createThumbnail(
					blob,
					myDropZone.options.thumbnailWidth,
					myDropZone.options.thumbnailHeight,
					myDropZone.options.thumbnailMethod,
					false, 
					function(dataURL) {

						// Update the Dropzone file thumbnail
						myDropZone.emit('thumbnail', file, dataURL);

						// Return modified file to dropzone
						done(blob);
					}
				);

			});

			// Remove the editor from view
			editor.parentNode.removeChild(editor);

		});
		editor.appendChild(confirm);

		// Load the image
		var image = new Image();
		image.src = URL.createObjectURL(file);
		editor.appendChild(image);

		// Append the editor to the page
		document.body.appendChild(editor);

		// Create Cropper.js and pass image
		var cropper = new Cropper(image, {
			aspectRatio: 1
		});

	}
};
</script>
@endpush