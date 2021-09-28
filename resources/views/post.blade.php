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

                <nav class="header__nav-wrap">

                    
                    <ul class="header__nav">
                        <li><a href="/" title="">Back To Home</a></li>
                        
                    </ul> <!-- end header__nav -->


                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header>
        </div>


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">
    <div class="s-content__header ">    
    <li class="has-children"> <h1 class="s-content__header-title">
                    {{ $post->header }}
                </h1>
                <ul class="sub-menu">
                <ul class="s-content__header-meta">
                <li>   <a href="/category/{{ $post->category->slug }}"
                           >{{ $post->category->name }}</a> </li>
                   
                 <li>   <p class="mt-12 block text-gray-400 text-xs">
                    Published
                    <time>{{ $post->created_at->diffForHumans() }}</time>
                </p> </li>
</ul></div>


    <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <img src="/images/thumbs/single/standard/standard-1000.jpg" 
                         srcset="/images/thumbs/single/standard/standard-2000.jpg 2000w, 
                                 /images/thumbs/single/standard/standard-1000.jpg 1000w, 
                                 /images/thumbs/single/standard/standard-500.jpg 500w" 
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </div>
            </div> <!-- end s-content__media -->
         
                   
                  

                <div class="col-full s-content__main">
                <p class="lead">{!! $post->body !!}</p>
            </div>


            <div class="s-content__author">
 <!-- <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full"> -->
                        <h4 class="s-content__author-name">
                            <a href="/user/{{$post->user->name}}" {{$post->user->name}}
                            class="px-3 py-1 border border-black-300 rounded-full text-black-300 text-xs uppercase font-semibold"
                               > Written by {{ $post->user->name }} </a>
                        </h4>

            </div>
</div>


@admin

<div class="dropdowns">
    
    <li class="has-children"> <h1> More... </h1>
                <ul class="sub-menu">
                <li><a href="/posts/{{ $post->id }}/edit">Edit</a></li>
                                <li>
                                    <button type="submit" class="submit btn btn--primary">Delete</button>
                                </li>
                            </ul>
                        </li>
</div>
                    <!-- <div class="s-content__header col-full">
                    <button type="submit" class="submit btn btn--primary"><a href="/posts/{{ $post->id }}/edit">Edit</button></a></div>
                        
                    <div class="s-content__header col-full">
                        <form method="POST" action="/posts/{{ $post->id }}">
                           
                        @csrf
                            
                            @method('DELETE')

                            <button type="submit" class="submit btn btn--primary">Delete</button>
                        </form>
                    </div> -->
                    @endadmin
            

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
@include('post-footer')
</html>


</x-layout>



