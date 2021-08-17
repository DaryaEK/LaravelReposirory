<x-layout>
<section class="px-6 py-8"> 
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
                    <h1 class="fond-bold text-3xl lg:text-4xl mb-10">
                        <a href="/post/{{ $post->slug }}">
                            {{ $post->header }}
                        </a>
                    </h1>

                    <span class="mt-4 block text-gray-400 text-xs">
                                        Published <time>{{$post->created_at->diffForHumans()}}</time>
                    </span>
                </div>
            </header>

            <div  class="space-y-4 lg:text-lg leading-loose">
                <p>
                    {{$post->body}}
                </p>

            </div>


            @auth

<div> 
    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="/posts/{{ $post->id }}/edit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Edit</a>
                            </td>

                            </div>
                            
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <form method="POST" action="/posts/{{ $post->id }}">
                                    @csrf
                                    @method('DELETE')

                                    <x-submit-button class="text-xs text-gray-400 bg-blue-500">Delete</x-submit-button>
                                </form>
                            </td>
@endauth

            <section class="col-span-8 col-start-5 mt-10 space-y-6">
            @include ('_add-comment-form')
            
            @foreach ($post->comments as $comment)
                        <x-post-comment :comment="$comment" />
                    @endforeach
                </section>

            


            </article>
        </main>
        </section>
</x-layout>
