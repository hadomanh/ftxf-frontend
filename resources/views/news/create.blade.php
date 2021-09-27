@extends('layouts.admin')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">News</h3>
    </div>

    <form class="card-body" action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="form-group">
            <label for="titleInput">Title</label>
            <input type="text" name="title" class="form-control" id="titleInput" placeholder="Title" required>
        </div>
    
        <div class="form-group">
            <label for="subtitleInput">Subtitle</label>
            <input type="text" name="subtitle" class="form-control" id="subtitleInput" placeholder="Subtitle" required>
        </div>
    
        <div class="form-group">
            <label for="contentInput">Content</label>
            <textarea name="content" class="form-control" rows="5" id="editor" required></textarea>
        </div>
    
        <div class="form-group">
            <label for="seoTitleInput">Meta Title (For SEO)</label>
            <input type="text" name="seo_title" class="form-control" id="seoTitleInput" placeholder="Meta Title">
        </div>
    
        <div class="form-group">
            <label for="seoDescriptionInput">Meta Description (For SEO)</label>
            <textarea name="seo_description" id="seoDescriptionInput" class="form-control" cols="30" rows="10"></textarea>
        </div>
    
        <div class="form-group">
            <label for="seoKeywordInput">Meta Keyword (For SEO)</label>
            <input type="text" name="seo_keyword" class="form-control" id="seoKeywordInput" placeholder="Meta Keyword">
        </div>
    
        <label for="uploadWrapper">Thumbnail</label>
        <div id="uploadWrapper">
            <label class="upload-trigger" for="js--upload">
                <div class="uploader">
                    <img src=""  
                        data-target="#js--upload" 
                        class="img-fluid upload-preview" 
                        data-content="uploadPreview">
                        
                    <span data-content="uploadPlus" class="upload-plus">
                        <i class="fas fa-plus"></i>
                    </span>
                </div>
            </label>
    
            <input type="file" name="thumbnail" class="d-none" id="js--upload" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('news.index') }}" class="btn btn-outline-secondary">Cancel</a>
    </form>

</div>

@endsection

@push('script')
<script src="{{ asset('bower_components/ckeditor4/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{ route('news.image.upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.config.height = 800;
    CKEDITOR.config.width = 'auto';
    CKEDITOR.config.skin = 'moono';

initUpload('#js--upload', '#uploadWrapper')
</script>
@endpush
