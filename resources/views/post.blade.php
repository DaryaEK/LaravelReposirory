<x-layout>
    <body id="top">
    <div class="s-pageheader">
        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.html">
                        <img src="/images/logo.svg" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

                <nav class="header__nav-wrap">

                   <a href="/" title="">Back To Home</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header>
    </div>


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
        <article class="row format-standard">
            <div class="s-content__header ">
                <h1 class="s-content__header-title">
                    {{ $post->header }}
                </h1>
                <ul class="sub-menu">
                    <ul class="s-content__header-meta">
                        <li><a href="/category/{{ $post->category->slug }}"
                            >{{ $post->category->name }}</a></li>

                        <li>
                            <p class="mt-12 block text-gray-400 text-xs">
                                Published
                                <time>{{ $post->created_at->diffForHumans() }}</time>
                            </p>
                        </li>
                    </ul>
            </div>


            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <img src="{{asset('storage/image/'.$post->image)}}" alt="">
                </div>
            </div> <!-- end s-content__media -->


            <div class="col-full s-content__main">
                <p class="lead">{!! $post->body !!}</p>
            </div>


            <div class="s-content__author">
                           <h4 class="s-content__author-name">
                    <a href="/user/{{$post->user->name}}" {{$post->user->name}}
                    class="px-3 py-1 border border-black-300 rounded-full text-black-300 text-xs uppercase font-semibold "
                    > Written by {{ $post->user->name }} </a>
                </h4>

            </div>


            @admin
            <div class="more dropdowns">

    <li >  <p class="more-class"> More... </p>
                <ul class="sub-menu">
                <li><a href="/posts/{{ $post->id }}/edit">Edit</a></li>
                                <li>
                                <a href="/posts/{{ $post->id }}/delete">Delete</a>
                                </li>
                            </ul>
                        </li>
</div>
          
            @endadmin


            <section >
                @include ('_add-comment-form')

                @foreach ($post->comments as $comment)
                    <x-post-comment :comment="$comment"/>
                @endforeach
            </section>
        </article>
    </section>


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    </body>
    @include('post-footer')

</x-layout>



