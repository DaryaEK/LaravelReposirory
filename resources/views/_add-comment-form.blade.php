@auth

    <x-panel>
    <div class="respond">
        <form method="POST" action="/posts/{{ $post->slug }}/comments" >
            @csrf

            <header>
                <!-- <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full"> -->

                <h2> Want to participate? </h2>
            </header>

            <div class="mt-6">
                <textarea
                    name="body"
                    class="full-width"
                    rows="5"
                    placeholder="Quick, thing of something to say!"
                    required style = "margin: 0px 0px 30px; width: 871px; height: 260px;"></textarea>

                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>

                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
            <x-submit-button>Post</x-submit-button>
            </div>

        </form>
</div>
    </x-panel>

@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or
        <a href="/login" class="hover:underline">Log in</a> to leave a comment.
    </p>

@endauth