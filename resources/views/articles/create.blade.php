<!DOCTYPE html>
<html>
<head>
    <title>Create Article</title>
    <!-- TinyMCE Script -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#simple-editor',
            menubar: false,
            toolbar: 'bold italic underline | alignleft aligncenter alignright | undo redo',
            height: 200
        });
    </script>
</head>
<body>
    <h1>Create Article</h1>
 
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Content:</label>
            <textarea class="ckeditor" name="content" id="ckedtor" required></textarea>
        </div>
        <button type="submit">Save</button>
    </form>
    <script src="{{ asset('assets-landing/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets-landing/ckeditor/ckeditor.js') }}"></script>
    <script>
        tinymce.init({
    selector: 'textarea#default',
    width: 1000,
    height: 300,
    plugins:[
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media', 
        'table', 'emoticons', 'template', 'codesample'
    ],
    toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify |' + 
    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
    'forecolor backcolor emoticons',
    menu: {
        favs: {title: 'menu', items: 'code visualaid | searchreplace | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table',
    content_style: 'body{font-family:Helvetica,Arial,sans-serif; font-size:16px}'
});
    </script>
</body>
</html>
