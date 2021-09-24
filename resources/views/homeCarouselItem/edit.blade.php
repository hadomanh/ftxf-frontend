@extends('layouts.admin')

@section('content')
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Home Carousel Item</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('home-carousel-item.update', $homeCarouselItem->id) }}" enctype="multipart/form-data" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="nameInput">Name</label>
                <input type="text" name="name" class="form-control" id="nameInput" placeholder="Name" value="{{ $homeCarouselItem->name }}">
            </div>
    
            <div class="form-group">
                <label for="positionInput">Order</label>
                <input type="number" name="position" class="form-control" id="positionInput" placeholder="Order" value="{{ $homeCarouselItem->position }}" required>
            </div>

            <div class="form-group">
                <label for="urlInput">URL</label>
                <input type="text" name="url" class="form-control" id="urlInput" placeholder="URL" value="{{ $homeCarouselItem->url }}">
            </div>

            <div class="form-group">
                <label for="descriptionInput">Description</label>
                <textarea name="description" class="form-control" rows="5" id="descriptionInput" placeholder="Description">{{ $homeCarouselItem->description }}</textarea>
            </div>

            <label for="logoUploadWrapper">Logo</label>
            <div id="logoUploadWrapper">
                <label class="upload-trigger" for="js--logoUpload">
                    <div class="uploader">
                        <img src="{{ asset('storage/' . $homeCarouselItem->logo) }}"  
                            data-target="#js--logoUpload" 
                            class="img-fluid upload-preview" 
                            data-content="uploadPreview">
                            
                        <span data-content="uploadPlus" class="upload-plus">
                        </span>
                    </div>
                </label>

                <input type="file" name="logo" class="d-none" id="js--logoUpload">
            </div>

            <label for="thumbnailUploadWrapper">Thumbnail</label>
            <div id="thumbnailUploadWrapper">
                <label class="upload-trigger" for="js--thumbnailUpload">
                    <div class="uploader">
                        <img src="{{ asset('storage/' . $homeCarouselItem->thumbnail) }}"  
                            data-target="#js--thumbnailUpload" 
                            class="img-fluid upload-preview" 
                            data-content="uploadPreview">
                            
                        <span data-content="uploadPlus" class="upload-plus">
                        </span>
                    </div>
                </label>

                <input type="file" name="thumbnail" class="d-none" id="js--thumbnailUpload">
            </div>

            <label for="backgroundUploadWrapper">Background</label>
            <div id="backgroundUploadWrapper">
                <label class="upload-trigger" for="js--backgroundUpload">
                    <div class="uploader">
                        <img src="{{ asset('storage/' . $homeCarouselItem->background) }}"  
                            data-target="#js--backgroundUpload" 
                            class="img-fluid upload-preview" 
                            data-content="uploadPreview">
                            
                        <span data-content="uploadPlus" class="upload-plus">
                        </span>
                    </div>
                </label>

                <input type="file" name="background" class="d-none" id="js--backgroundUpload">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-warning">Submit</button>
            <a href="{{ route('home-carousel-item.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
</div>
  <!-- /.card -->

@endsection

@push('script')
<script>
    initUpload('#js--backgroundUpload', '#backgroundUploadWrapper')
    initUpload('#js--thumbnailUpload', '#thumbnailUploadWrapper')
    initUpload('#js--logoUpload', '#logoUploadWrapper')
</script>
@endpush
