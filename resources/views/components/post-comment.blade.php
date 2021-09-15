@props(['comment'])

<article >
    <div>
    <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" alt="" width="60" height="60" class="rounded-xl">
    </div>

    <div>
        <header class="mb-4">
        <h3 class="font-bold">{{ $comment->user->name }}</h3>

            <p class="text-xs">
                Posted
                <time>{{ $comment->created_at }}</time>
            </p>
        </header>

        <p>
        {{ $comment->body }}
        </p>
    </div>
</article>