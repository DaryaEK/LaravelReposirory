<x-layout>
<main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                    <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <a href="{{route('post.main')}}/categories/{{$post->user->slug}}" {{$post->user->name}}
                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                       style="font-size: 10px"> Writen by {{ $post->user->name }} </a>
                </div>



                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/post/{{ $post->slug }}">
                            {{ $post->header }}
                        </a>
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
            </article>
        </main>
</x-layout>
