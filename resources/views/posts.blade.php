<x-layout>

    @include('posts-header')

    <main >

        @if ($posts->count())

            <x-feature-post-card :post="$posts[0]" />

            @if ($posts->count() > 1)

                <div class="lg:grid lg:grid-cols-6">

                    @foreach($posts->skip(1) as $post)
                        <x-post-card :post="$post" class="dark:bg-gray-800 dark:hover:bg-gray-700 m-px {{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}"></x-post-card>
                    @endforeach
                </div>

            @endif

        @else
            <p class="text-center dark:text-white">No posts yet</p>
        @endif


    </main>

</x-layout>
