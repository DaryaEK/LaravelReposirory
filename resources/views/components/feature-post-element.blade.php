@props(['post'])
<div class="entry" style="background-image:url('images/thumbs/featured/featured-guitarman.jpg');">

    <div class="entry__content">
        <span class="entry__category"><a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a></span>

        <h1><a href="/posts/{{$post->slug}}" title="">{{$post->header}}</a></h1>

        <div class="entry__info">
            <a href="#0" class="entry__profile-pic">
                <img class="avatar" src="images/avatars/user-03.jpg" alt="">
            </a>

            <ul class="entry__meta">
                <li><a href="/user/{{ $post->user->name }}">{{ $post->user->name  }}</a></li>
                <li>{{$post->created_at->diffForHumans()}}</li>
            </ul>
        </div>
    </div> <!-- end entry__content -->

</div> <!-- end entry -->
