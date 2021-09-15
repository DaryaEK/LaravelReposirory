@props(['categories', 'users'])
<nav class="header__nav-wrap">

    <h2 class="header__nav-heading h6">Site Navigation</h2>

    <ul class="header__nav dropdowns">
        <x-menu-item class="current">
            <x-menu-links href="/">Home</x-menu-links>
        </x-menu-item>

        <x-menu-item class="has-children">
            <x-menu-links href="/">Category</x-menu-links>
            <ul class="sub-menu">
                @foreach($categories as $category)
                    <x-menu-item>
                        <x-menu-links href="/category/{{ $category->slug }}">{{$category->name}}</x-menu-links>
                    </x-menu-item>

                @endforeach
            </ul>
        </x-menu-item>
        <x-menu-item class="has-children">
            <x-menu-links href="/">Authors</x-menu-links>
            <ul class="sub-menu">
                @foreach($users as $user)
                    <x-menu-item>
                        <x-menu-links href="/user/{{ $user->name }}">{{ucwords($user->name)}}</x-menu-links>
                    </x-menu-item>

                @endforeach
            </ul>
        </x-menu-item>


    </ul>
</nav>
