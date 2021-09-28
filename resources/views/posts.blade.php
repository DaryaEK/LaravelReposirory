<x-layout>

    @include('posts-header')

    <section class="s-content">
        @if(!$posts->isEmpty())
            <div class="row masonry-wrap">
                <div class="masonry">

                    <div class="grid-sizer"></div>
                    @foreach($posts as $post)
                        <x-post-card :post="$post"></x-post-card>
                    @endforeach


                </div>
            </div>
        @else
            <h3 class="text-center">No Post here</h3>
        @endif
    </section>
    @include('post-footer')
</x-layout>
