@props(['comment'])

<article >
    
    
    

    <div>
        
        <header class="mb-4">
            <!-- <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" alt="" width="60" height="60" class="rounded-xl"> -->
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