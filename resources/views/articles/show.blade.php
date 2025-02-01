<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
</head>
<body>
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p>{!! $article->content !!}</p>
        <a href="">Kembali ke Daftar Artikel</a>
    </div>
</body>
</html>
