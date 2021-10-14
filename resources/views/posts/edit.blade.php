<x-layout>
<main class="edit-form-container">
<div class="edit-form-block">
    <x-setting :heading="'Edit Post: ' . $post->header">

        <form method="POST" action="/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')



            <x-form.textarea name="header" required>{{ old('header', $post->header) }}</x-form.textarea>
            <x-form.textarea name="slug" required>{{ old('slug', $post->slug) }}</x-form.textarea>
            <x-form.textarea name="body" required>{{ old('body', $post->body) }}</x-form.textarea>


                <x-form.label name="category"/>

                <select name="category_id" id="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category"/>
              
            <x-submit-button>Update</x-submit-button>
            <nav class="header__nav-wrap">

<a href="/" title="">Return</a>

</nav> 
        </form>
    </x-setting>
</div>
</main>

</x-layout>