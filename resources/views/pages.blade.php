<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Статьи</title>
</head>
<body bgcolor="#E6E6FA">


@foreach($pages as $page)
<article>
<p>{{$page['head']}}</p>
<div>{{$page['text']}}</div>
<a href="{{ url('pages/'.$page['slug']) }}">Read more...</a>
</article>
@endforeach
        
        </body>
</html>