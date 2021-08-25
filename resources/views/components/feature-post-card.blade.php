@props(['post'])

<article>

<class="transition-colors duration-300 dark:bg-gray-800 dark:hover:bg-gray-700  hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="pageheader-content row">
            <div class="col-full">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('images/thumbs/featured/featured-guitarman.jpg');">
                            
                            <div class="entry__content">
                            <a href="/category/{{ $post->category->slug }}"

class="px-3 py-1 border border-black-300 rounded-full text-white-300 text-xs uppercase font-semibold"
style="font-size: 20px">{{ $post->category->name }}</a>
</div>

<div class="mt-4">
<h1 >
 {{ $post->header }}
</h1>
<div class="featured__column featured__column--big">
                <p class="dark:text-white">
                    {!! $post->body !!}
                </p>
            </div> 
<span class="entry__meta">
                 Published <time>{{ $post->created_at->diffForHumans() }}</time>
             </span>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div>


    <!-- <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
        </div> -->

        <!-- <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">

                    <a href="/category/{{ $post->category->slug }}"

                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">{{ $post->category->name }}</a>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl dark:text-white">
                        {{ $post->header }}
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 space-y-4">
                <p class="dark:text-white">
                    {!! $post->body !!}
                </p>
            </div> -->

            <!-- <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <a href="/user/{{ $post->user->name }}" class="cursor-pointer font-bold dark:text-white">{{ $post->user->name  }}</a>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="/posts/{{ $post->slug }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div> -->

</article>

