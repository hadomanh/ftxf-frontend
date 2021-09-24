@extends('layouts.admin')

@section('content')

<form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="titleInput">Title</label>
        <input type="text" name="title" class="form-control" id="titleInput" placeholder="Title" value="{{ $news->title }}" required>
    </div>

    <div class="form-group">
        <label for="subtitleInput">Subtitle</label>
        <input type="text" name="subtitle" class="form-control" id="subtitleInput" placeholder="Subtitle"  value="{{ $news->subtitle }}" required>
    </div>

    <div class="form-group">
        <label for="contentInput">Content</label>
        <textarea name="content" class="form-control" rows="5" id="editor" required>
            {!! $news->content !!}
        </textarea>
    </div>

    <label for="uploadWrapper">Thumbnail</label>
    <div id="uploadWrapper">
        <label class="upload-trigger" for="js--upload">
            <div class="uploader">
                <img src="{{ asset('storage/' . $news->thumbnail) }}"  
                    data-target="#js--upload" 
                    class="img-fluid upload-preview" 
                    data-content="uploadPreview">
                    
                <span data-content="uploadPlus" class="upload-plus">
                </span>
            </div>
        </label>

        <input type="file" name="thumbnail" class="d-none" id="js--upload">
    </div>

    <button type="submit" class="btn btn-warning">Submit</button>
    <a href="{{ route('news.index') }}" class="btn btn-outline-secondary">Cancel</a>
</form>

@endsection

@push('script')
<script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}"></script>
<script>
    if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 )
        CKEDITOR.tools.enableHtml5Elements( document );

    // The trick to keep the editor in the sample quite small
    // unless user specified own height.
    CKEDITOR.config.height = 500;
    CKEDITOR.config.width = 'auto';

    var initEditor = ( function() {
        var wysiwygareaAvailable = isWysiwygareaAvailable(),
            isBBCodeBuiltIn = !!CKEDITOR.plugins.get( 'bbcode' );

        return function() {
            var editorElement = CKEDITOR.document.getById( 'editor' );

            // :(((
            if ( isBBCodeBuiltIn ) {
                editorElement.setHtml(
                    'Hello world!\n\n' +
                    'I\'m an instance of [url=https://ckeditor.com]CKEditor[/url].'
                );
            }

            // Depending on the wysiwygarea plugin availability initialize classic or inline editor.
            if ( wysiwygareaAvailable ) {
                CKEDITOR.replace( 'editor', {
                    filebrowserUploadUrl: "{{ route('news.image.upload', ['_token' => csrf_token() ]) }}",
                    filebrowserUploadMethod: 'form'
                } );
            } else {
                editorElement.setAttribute( 'contenteditable', 'true' );
                CKEDITOR.inline( 'editor' );

                // TODO we can consider displaying some info box that
                // without wysiwygarea the classic editor may not work.
            }
        };

        function isWysiwygareaAvailable() {
            // If in development mode, then the wysiwygarea must be available.
            // Split REV into two strings so builder does not replace it :D.
            if ( CKEDITOR.revision == ( '%RE' + 'V%' ) ) {
                return true;
            }

            return !!CKEDITOR.plugins.get( 'wysiwygarea' );
        }
    } )();

    initEditor()

    initUpload('#js--upload', '#uploadWrapper')

</script>
@endpush
