
@props(['post'])

<article class="masonry__brick entry format-standard" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="/posts/{{$post->slug}}" class="entry__thumb-link">
            <img src="{{asset('storage/image/'.$post->image)}}"
                 srcset="{{asset('storage/image/'.$post->image)}} 1x, {{asset('storage/image/'.$post->image)}} 2x"
                 alt="">
        </a>
    </div>

    <div class="entry__text">
        <div class="entry__header">

            <div class="entry__date">
                <a href="/posts/{{$post->slug}}">{{$post->created_at}}</a>
            </div>
            <h1 class="entry__title"><a href="/posts/{{$post->slug}}">{{$post->header}}</a>
            </h1>

        </div>
        <div class="entry__excerpt">
            <p>
                {{$post->body}}
            </p>
        </div>
        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
                            </span>
        </div>
    </div>


</article> <!-- end article -->
