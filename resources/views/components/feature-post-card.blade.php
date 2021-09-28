@props(['posts'])

<div class="col-full">
    <div class="featured">
        <div class="featured__column featured__column--big">
            <x-feature-post-element :post="$posts[0]"/>
        </div> <!-- end featured__big -->

        <div class="featured__column featured__column--small">
            <x-feature-post-element :post="$posts[1]"/>
            <x-feature-post-element :post="$posts[2]"/>
        </div> <!-- end featured__small -->
    </div> <!-- end featured -->

</div> <!-- end col-full -->
