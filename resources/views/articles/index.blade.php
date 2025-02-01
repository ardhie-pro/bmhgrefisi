<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
  
<div class="container">
    <h1>Daftar Artikel</h1>
    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
            </li>
        @endforeach
    </ul>
</div>


</body>
</html>
