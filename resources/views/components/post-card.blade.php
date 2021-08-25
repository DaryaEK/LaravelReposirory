@props(['post'])
<article

{{$attributes->merge(['class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])}}>
                  
<section class="s-content">
        
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="/images/thumbs/masonry/lamp-400.jpg" 
                                    srcset="/images/thumbs/masonry/lamp-400.jpg 1x, /images/thumbs/masonry/lamp-800.jpg 2x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html">December 15, 2017</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">Just a Standard Format Post.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Design</a> 
                                <a href="category.html">Photography</a>
                            </span>
                        </div>
                    </div>
    
                </article> <!-- end article -->
</div>
</div>

</section>





                    <!-- <div class="py-6 px-5">
                        <div>
                            <img src="/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="/category/{{$post->category->slug}}"
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">{{$post->category->name}}s</a>

                                </div>
                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                    <a href="/posts/{{$post->slug}}">{{$post->header}}</a>
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{$post->created_at->diffForHumans()}}</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    {{$post->body}}
                                </p>

                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                    <a href="/user/{{ $post->user->name }}" class="cursor-pointer font-bold dark:text-white">{{ $post->user->name  }}</a>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                <a href="/posts/{{$post->slug}}"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >Read More</a>
                                </div>

                               
                            </footer>
                            
                        </div>
                    </div> -->
                </article>