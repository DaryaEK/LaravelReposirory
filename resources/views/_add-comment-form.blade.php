@auth

    <x-panel>
    <div class="respond">
        <form method="POST" action="/posts/{{ $post->slug }}/comments" >
            @csrf

            <header>

                <h2 style="margin: 40px 30px 30px"> Want to participate? </h2>
            </header>

            <div>
                <textarea
                    name="body"
                    class="full-width"
                    rows="5"
                    placeholder="Quick, thing of something to say!"
                    required style = "margin: 0px 30px 30px; width: 871px; height: 200px; background-color: #e9e9e9;"></textarea>

                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>

                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
            <button style="margin: 10px 30px 30px">Post</button>
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