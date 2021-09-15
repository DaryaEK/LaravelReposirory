@props(['post'])
<article>
               
<section class="s-content">
        
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                        <a href="/posts/{{$post->slug}}" class="entry__thumb-link">
                            <img src="/images/thumbs/masonry/lamp-400.jpg" 
                                    srcset="/images/thumbs/masonry/lamp-400.jpg 1x, /images/thumbs/masonry/lamp-800.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html"><time>{{$post->created_at->diffForHumans()}}</time></a>
                            </div>



                            <h1 class="entry__title"><a href="/posts/{{$post->slug}}">{{$post->header}}</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                        <p>
                                    {{$post->body}}
                                </p>
                        </div>


                        <div class="s-content__author-about">
                            <span class="entry__meta-links">
                            <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
                            <h4 class="s-content__author-name">
                    <a href="/user/{{ $post->user->name }}">{{ $post->user->name  }}</a></h4>
                            </span>
                        </div>
                    </div>
    
                </article> <!-- end article -->
</div>
</div>

</section>

