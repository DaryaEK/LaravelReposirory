<section class="s-pageheader s-pageheader--home">

    <header class="header">
        <div class="header__content row">

            <div class="header__logo">
                <a class="logo">
                    <img src="/images/logo.svg" alt="Homepage">
                </a>
            </div> <!-- end header__logo -->

            <div class="header__profile dropdowns">
                <div class="mt-8 md:mt-0 flex items-center">
                    @auth
                        <li class="has-children">
                            <a href="#0" title="">Welcome, {{ auth()->user()->name }}!</a>
                            <ul class="sub-menu">
                                <li><a href="/logout">Log Out</a></li>
                                <li><a href="admin/posts/create">New Post</a></li>
                            </ul>
                        </li>
                    @else
                        <a href="/register" class="text-xs font-bold uppercase">Register</a>
                        <a href="/login" class="ml-6 text-xs font-bold uppercase">Log In</a>
                    @endauth


                </div>
            </div> <!-- end header__social -->





            <div class="top-search">

                <form method="GET" action="#">
                    <input type="text"
                           name="search"
                           placeholder="Search"
                           class="bg-transparent placeholder-black font-semibold text-sm"
                           value="{{ request('search') }}"
                    >
                </form>
            </div>


            <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
            <x-menu :categories="$categories" :users="$users"/>


        </div> <!-- header-content -->
    </header> <!-- header -->
    <div class="pageheader-content row">
        <x-feature-post-card :posts="$posts->slice(0, 3)"/>
    </div> <!-- end pageheader-content row -->


</section>


<!-- pageheader
================================================== -->
{{--    <section class="s-pageheader s-pageheader--home">--}}

{{--        <header class="header">--}}
{{--            <div class="header__content row">--}}

{{--                <div class="header__logo">--}}
{{--                    <a class="logo">--}}
{{--                        <img src="/images/logo.svg" alt="Homepage">--}}
{{--                    </a>--}}
{{--                </div> <!-- end header__logo -->--}}


{{--                <!-- <div class="mt-8 md:mt-0 flex items-center">--}}
{{--                @auth--}}
{{--                    <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>--}}

{{--                    <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">--}}

{{--                        @csrf--}}

{{--                        <button type="submit">Log Out</button>--}}
{{--                        <a href="admin/posts/create" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">--}}
{{--                    Publish New Post--}}
{{--                </a>--}}
{{--                    </form>--}}
{{--                @else--}}
{{--                    <a href="/register" class="text-xs font-bold uppercase">Register</a>--}}
{{--                    <a href="/login" class="ml-6 text-xs font-bold uppercase">Log In</a>--}}
{{--                @endauth--}}


{{--            </div>--}}
{{--        </nav>   -->--}}

{{--        <a class="header__search-trigger" href="#0"></a>--}}
{{--        <div class="header__search">--}}
{{--        <form role="search" method="get" action="#">--}}
{{--            <input type="text"--}}
{{--                       name="search"--}}
{{--                       placeholder="Find something"--}}
{{--                       class="bg-transparent placeholder-black font-semibold text-sm"--}}
{{--                       value="{{ request('search') }}"--}}
{{--                >--}}
{{--            </form>--}}
{{--        </div>--}}

{{--                    <a href="#0" title="Close Search" class="header__overlay-close">Close</a>--}}


{{--                </div>  <!-- end header__search -->--}}


{{--                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>--}}

{{--                <nav class="header__nav-wrap">--}}

{{--                    <h2 class="header__nav-heading h6">Site Navigation</h2>--}}

{{--                    <ul class="header__nav">--}}
{{--                        <li class="current"><a href="/" title="">Home</a></li>--}}
{{--                        <li class="has-children">--}}

{{--                        <x-dropdown>--}}
{{--                <x-slot name="trigger">--}}
{{--                    <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">--}}
{{--                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}}--}}
{{--                        <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>--}}

{{--                    </button>--}}
{{--                </x-slot>--}}

{{--                <x-dropdown-item href="/?={{ http_build_query(request()->except('category', 'page')) }}"--}}
{{--                                 :active="request()->routeIs('post.main')">All--}}
{{--                </x-dropdown-item>--}}

{{--                @foreach($categories as $category)--}}
{{--                    <x-dropdown-item--}}

{{--                        href="/category/{{ $category->slug }}"--}}
{{--                        :active='request()->is("/categories/{$category->slug}")'--}}
{{--                    >{{ ucwords($category->name) }}--}}
{{--                    </x-dropdown-item>--}}

{{--                @endforeach--}}
{{--            </x-dropdown>--}}

{{--                        </li>--}}
{{--                        <li class="has-children">--}}

{{--                        <x-dropdown>--}}
{{--                <x-slot name="trigger">--}}
{{--                    <button class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left inline-flex">--}}

{{--                        {{ isset($currentAuthor) ? $currentAuthor->name : 'Users' }}--}}

{{--                        <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>--}}
{{--                    </button>--}}

{{--                </x-slot>--}}

{{--                <x-dropdown-item href="/"--}}
{{--                                 :active="request()->routeIs('post.main')">All--}}
{{--                </x-dropdown-item>--}}


{{--                @foreach($users as $user)--}}
{{--                    <x-dropdown-item href="/user/{{ $user->name }}"--}}
{{--                                     :active='request()->is("/user/{{ $user->name }}")'--}}
{{--                    >{{ ucwords($user->name) }}</x-dropdown-item>--}}

{{--                @endforeach--}}
{{--            </x-dropdown>--}}

{{--                        </li>--}}


{{--                    </ul> <!-- end header__nav -->--}}


{{--                </nav> <!-- end header__nav-wrap -->--}}

{{--            </div> <!-- header-content -->--}}
{{--        </header> <!-- header -->--}}


{{--<!-- <header class="max-w-xl mx-auto mt-20 text-center">--}}
{{--    <h1 class="text-4xl">--}}
{{--        <span class="text-blue-500">Laravel, который не смог</span>--}}
{{--    </h1>--}}

{{--    <h2 class="inline-flex mt-2">By Lary Laracore <img src="/images/lary-head.svg"--}}
{{--                                                       alt="Head of Lary the mascot"></h2>--}}

{{--    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">--}}

{{--        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">--}}

{{--            <x-dropdown>--}}
{{--                <x-slot name="trigger">--}}
{{--                    <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">--}}
{{--                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}}--}}
{{--                        <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>--}}

{{--                    </button>--}}
{{--                </x-slot>--}}

{{--                <x-dropdown-item href="/?={{ http_build_query(request()->except('category', 'page')) }}"--}}
{{--                                 :active="request()->routeIs('post.main')">All--}}
{{--                </x-dropdown-item>--}}

{{--                @foreach($categories as $category)--}}
{{--                    <x-dropdown-item--}}

{{--                        href="/category/{{ $category->slug }}"--}}
{{--                        :active='request()->is("/categories/{$category->slug}")'--}}
{{--                    >{{ ucwords($category->name) }}--}}
{{--                    </x-dropdown-item>--}}

{{--                @endforeach--}}
{{--            </x-dropdown>--}}

{{--        </div>--}}

{{--        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">--}}

{{--            <x-dropdown>--}}
{{--                <x-slot name="trigger">--}}
{{--                    <button class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left inline-flex">--}}

{{--                        {{ isset($currentAuthor) ? $currentAuthor->name : 'Users' }}--}}

{{--                        <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>--}}
{{--                    </button>--}}

{{--                </x-slot>--}}

{{--                <x-dropdown-item href="/"--}}
{{--                                 :active="request()->routeIs('post.main')">All--}}
{{--                </x-dropdown-item>--}}


{{--                @foreach($users as $user)--}}
{{--                    <x-dropdown-item href="/user/{{ $user->name }}"--}}
{{--                                     :active='request()->is("/user/{{ $user->name }}")'--}}
{{--                    >{{ ucwords($user->name) }}</x-dropdown-item>--}}

{{--                @endforeach--}}
{{--            </x-dropdown>--}}
{{--        </div>--}}


{{--        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">--}}
{{--            <form method="GET" action="#">--}}
{{--            <input type="text"--}}
{{--                       name="search"--}}
{{--                       placeholder="Find something"--}}
{{--                       class="bg-transparent placeholder-black font-semibold text-sm"--}}
{{--                       value="{{ request('search') }}"--}}
{{--                >--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</header> -->--}}
