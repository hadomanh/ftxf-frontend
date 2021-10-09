@extends('layouts.admin')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">About</h3>
    </div>

    <form class="card-body" action="{{ route('description.update', $description->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nameInput">Description</label>
            <textarea name="detail" class="form-control" rows="5" id="editor" required>{{ $description->detail }}</textarea>
        </div>
    
        <button type="submit" class="btn btn-warning">Submit</button>
    </form>

</div>

@endsection

@push('script')
<script src="{{ asset('bower_components/ckeditor4/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('editor');
    CKEDITOR.config.height = 300;
    CKEDITOR.config.width = 'auto';
    CKEDITOR.config.skin = 'moono';
</script>
@endpush
