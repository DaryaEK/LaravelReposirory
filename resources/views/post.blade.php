<x-layout>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Standard Post Format</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" href="/css/main.css">

    <!-- script
    ================================================== -->
    <script src="/js/modernizr.js"></script>
    <script src="/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">
<div class="s-pageheader">
<header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.html">
                        <img src="/images/logo.svg" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <ul class="header__nav">
                        <li><a href="/" title="">Back To Home</a></li>
                        
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header>
        </div>


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">
    <div class="s-content__header col-full">
    <h1 class="s-content__header-title">
                    {{ $post->header }}
                </h1>

                <div class="space-x-2">
                        <a href="/category/{{ $post->category->slug }}"
                           class="px-3 py-1 border border-black rounded-full text-black-300 text-xs uppercase font-semibold"
                           style="font-size: 10px">{{ $post->category->name }}</a>
                    </div>
                </div>

    <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <img src="/images/thumbs/single/standard/standard-1000.jpg" 
                         srcset="/images/thumbs/single/standard/standard-2000.jpg 2000w, 
                                 /images/thumbs/single/standard/standard-1000.jpg 1000w, 
                                 /images/thumbs/single/standard/standard-500.jpg 500w" 
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="" class="rounded-xl">
                </div>
            </div> <!-- end s-content__media -->
            <!-- <div class="col-span-4 lg:text-center lg:pt-14 mb-10"> -->
                <!-- <img src="/images/illustration-1.png" alt="" class="rounded-xl"> -->

                <p class="mt-12 block text-gray-400 text-xs">
                    Published
                    <time>{{ $post->created_at->diffForHumans() }}</time>
                </p>

                <div class="flex items-center lg:justify-center text-sm mt-4">
                    <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">
                            <a href="/user/{{$post->user->name}}" {{$post->user->name}}
                            class="px-3 py-1 border border-black-300 rounded-full text-black-300 text-xs uppercase font-semibold"
                               style="font-size: 10px"> Written by {{ $post->user->name }} </a>
                        </h5>
                    </div>
                </div>
            </div>




               

                <div class="col-full s-content__main">{!! $post->body !!}</div>
            </div>

            @auth
                    <div class="col-span-2">
                        <a href="/posts/{{ $post->id }}/edit"
                           class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Edit</a>
                    </div>
                    <div class="col-span-2">
                        <form method="POST" action="/posts/{{ $post->id }}">
                        @admin   
                        @csrf
                            
                            @method('DELETE')

                            <x-submit-button class="text-xs text-gray-400 bg-blue-500">Delete</x-submit-button>
                        </form>
                    </div>
                    @endadmin
            @endauth

            <section class="col-span-12 mt-10 space-y-6">
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


    <!-- Java Script
    ================================================== -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/main.js"></script>

</body>

</html>





















    <!-- <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                <p class="mt-4 block text-gray-400 text-xs">
                    Published
                    <time>{{ $post->created_at->diffForHumans() }}</time>
                </p>

                <div class="flex items-center lg:justify-center text-sm mt-4">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">
                            <a href="/user/{{$post->user->name}}" {{$post->user->name}}
                            class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               style="font-size: 10px"> Written by {{ $post->user->name }} </a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-6">
                    <a href="/"
                       class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>

                        Back to Posts
                    </a>

                    <div class="space-x-2">
                        <a href="/category/{{ $post->category->slug }}"
                           class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                           style="font-size: 10px">{{ $post->category->name }}</a>
                    </div>
                </div>

                <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                    {{ $post->header }}
                </h1>

                <div class="space-y-4 lg:text-lg leading-loose">{!! $post->body !!}</div>
            </div>

            @auth
                    <div class="col-span-2">
                        <a href="/posts/{{ $post->id }}/edit"
                           class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Edit</a>
                    </div>
                    <div class="col-span-2">
                        <form method="POST" action="/posts/{{ $post->id }}">
                        @admin   
                        @csrf
                            
                            @method('DELETE')

                            <x-submit-button class="text-xs text-gray-400 bg-blue-500">Delete</x-submit-button>
                        </form>
                    </div>
                    @endadmin
            @endauth

            <section class="col-span-12 mt-10 space-y-6">
                @include ('_add-comment-form')

                @foreach ($post->comments as $comment)
                    <x-post-comment :comment="$comment"/>
                @endforeach
            </section>
        </article>
    </main> -->
</x-layout>