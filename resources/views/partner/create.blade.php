@extends('layouts.admin')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Partners</h3>
    </div>

    <form class="card-body" action="{{ route('partner.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="form-group">
            <label for="nameInput">Name</label>
            <input type="text" name="name" class="form-control" id="nameInput" placeholder="Name" required>
        </div>
    
        <div class="form-group">
            <label for="urlInput">URL</label>
            <input type="text" name="url" class="form-control" id="urlInput" placeholder="URL" required>
        </div>
    
        <label for="uploadWrapper">Logo</label>
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
    
            <input type="file" name="logo" class="d-none" id="js--upload">
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('partner.index') }}" class="btn btn-outline-secondary">Cancel</a>
    </form>

</div>

@endsection

@push('script')
<script>
    initUpload('#js--upload', '#uploadWrapper')
</script>
@endpush
