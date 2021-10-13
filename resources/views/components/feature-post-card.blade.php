@props(['posts'])

<div class="col-full">
    <div class="featured">
        <div class="featured__column featured__column--big">
            @if(!empty($posts[0]))
                <x-feature-post-element :post="$posts[0]"/>
            @endif
        </div> <!-- end featured__big -->

        <div class="featured__column featured__column--small">
            @if(!empty($posts[1]))
                <x-feature-post-element :post="$posts[1]"/>
            @endif
            @if(!empty($posts[2]))
                <x-feature-post-element :post="$posts[2]"/>
            @endif
        </div> <!-- end featured__small -->
    </div> <!-- end featured -->

</div> <!-- end col-full -->
