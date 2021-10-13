<x-layout>
<main class="register-form-container">
<div class="register-form-block">

            <h1 class="text-center font-bold text-xl">Register</h1>
            <form enctype="multipart/form-data" method="POST" action="/register" class="mt-10">

                @csrf

                
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 "
                           for="name"

                    >
                        Name
                    </label>


                    <input class="full-width text-center"
                           type="text"
                           name="name"
                           id="name"
                           value="{{ old('name') }}"
                           required
                    >

                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"

                    >
                        Email
                    </label>


                    <input class="full-width text-center"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           required
                    >

                   @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                   @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"

                    >
                        Password
                    </label>


                    <input class="full-width text-center"
                           type="password"
                           name="password"
                           id="password"
                           required
                    >

                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
              <input type="file" name="image">
</div>
                <div>
                <button type="submit" class="submit btn btn--primary">Submit</button>
                </div>

               @if ($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
               @endif
               <nav class="header__nav-wrap">

<a href="/" title="">Return</a>

</nav> <!-- end header__nav-wrap -->
            </form>
</div>
        </main>

</x-layout>
