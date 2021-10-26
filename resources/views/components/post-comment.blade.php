@props(['comment'])


<article >
    

    <div class="comments-wrap">
        
    <div id="comments" class="row">
        
    <div class="comment__content">
    
        <ol class="commentlist">

<li class="depth-1 comment">
<div class="comment__avatar">
                                <img width="60" height="50"  src="{{asset('storage/image/'.$comment->user->image)}}" alt="">
                            </div>
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
</li>
</ol>
    </div>
    </div>
</div>

</article>