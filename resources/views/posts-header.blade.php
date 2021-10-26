<section class="s-pageheader s-pageheader--home">

    <header class="header">
        <div class="header__content row">

            <div class="header__logo">
                <a class="logo">
                    <img src="/images/logogen.png" alt="Homepage">
                </a>
            </div> 

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
            </div> 


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


        </div> 
    </header> 
    <div class="pageheader-content row">
        <x-feature-post-card :posts="$recentPost"/>
    </div> 


</section>
