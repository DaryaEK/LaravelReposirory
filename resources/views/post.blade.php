<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Статья</title>
</head>
<body >
<h1>
<b><a href="{{route('post.main')}}/categories/{{$post->category->id}}">{{$post->category->name}}</a></b>
{{$post->header}}</h1>
<div>{{$post->body}}</div>
<a href="{{ route('post.main') }}">Back</a>

</body>
</html>