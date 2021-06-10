<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Статьи</title>
</head>
<body bgcolor="#E6E6FA">

@foreach($posts as $post)
<article>
<p>{{$post->header}}</p>
<b><a href="categories/{{$post->category->id}}">{{$post->category->name}}</a></b>
<div>{{$post->body}}</div>
<a href="{{ route('post.show', $post->slug) }}">Read more...</a>
</article>
@endforeach
        
        </body>
</html>