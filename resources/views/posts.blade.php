<x-layout>
@include('posts-header')
dd($posts)
<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
<x-feature-post-card :post="$posts[0]"/>
@if($posts->count())

<div class="lg:grid lg:grid-cols-2">
@foreach($posts->skip(1) as $post)
<x-post-card 
:post="$post"
class="{{$loop->iteration <3 ? 'col-span-3' : 'col-span-2'}}"/>
@endforeach
</div>
@endif
@else 
<p class="text-center">No post/</p>
@endif
</main>
</x-layout>









<!-- <!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Статьи</title>
</head>
<body bgcolor="#E6E6FA">
@foreach($posts as $post)
<article>
<p>{{$post->header}}</p>

<b><a href="posts/categories/{{$post->category->id}}">{{$post->category->name}}</a></b>
<div>{{$post->body}}</div>
<a href="{{ route('post.show', $post->slug) }}">Read more...</a>
</article>
@endforeach
        
        </body>
</html> -->