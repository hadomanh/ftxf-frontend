@extends('layouts.admin')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Home Carousel Item</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('home-carousel-item.store') }}" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nameInput">Name</label>
                <input type="text" name="name" class="form-control" id="nameInput" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="urlInput">URL</label>
                <input type="text" name="url" class="form-control" id="urlInput" placeholder="URL">
            </div>

            <div class="form-group">
                <label for="descriptionInput">Description</label>
                <textarea name="description" class="form-control" rows="5" id="descriptionInput" placeholder="Description"></textarea>
            </div>

            <label for="logoUploadWrapper">Logo</label>
            <div id="logoUploadWrapper">
                <label class="upload-trigger" for="js--logoUpload">
                    <div class="uploader">
                        <img src=""  
                            data-target="#js--logoUpload" 
                            class="img-fluid upload-preview" 
                            data-content="uploadPreview">
                            
                        <span data-content="uploadPlus" class="upload-plus">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                </label>

                <input type="file" name="logo" class="d-none" id="js--logoUpload">
            </div>

            <label for="thumbnailUploadWrapper">Thumbnail</label>
            <div id="thumbnailUploadWrapper">
                <label class="upload-trigger" for="js--thumbnailUpload">
                    <div class="uploader">
                        <img src=""  
                            data-target="#js--thumbnailUpload" 
                            class="img-fluid upload-preview" 
                            data-content="uploadPreview">
                            
                        <span data-content="uploadPlus" class="upload-plus">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                </label>

                <input type="file" name="thumbnail" class="d-none" id="js--thumbnailUpload">
            </div>

            <label for="backgroundUploadWrapper">Background</label>
            <div id="backgroundUploadWrapper">
                <label class="upload-trigger" for="js--backgroundUpload">
                    <div class="uploader">
                        <img src=""  
                            data-target="#js--backgroundUpload" 
                            class="img-fluid upload-preview" 
                            data-content="uploadPreview">
                            
                        <span data-content="uploadPlus" class="upload-plus">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                </label>

                <input type="file" name="background" class="d-none" id="js--backgroundUpload">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
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
