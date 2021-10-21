@props(['comment'])

<article >
    
    
    <div class="comments-wrap">
    <div class="comment__content">
        
            <!-- <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" alt="" width="60" height="60" class="rounded-xl"> -->
            <div class="comment__info">
            <cite>{{ $comment->user->name }}</cite>

            <div class="comment__meta">
                Posted
                <time class="comment__time">{{ $comment->created_at }}</time>
</div>
</div>


        <div class="comment__text">
       <p> {{ $comment->body }}</p>
</div>
    </div>
    </div>

</article>