<x-layout>
    <main class="login-form-container">
        <div class="login-form-block">
            <h1 class="text-center font-bold text-xl">Log In!</h1>
            <form method="POST" action="/login" class="mt-10">
                @csrf
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
                    <button type="submit" class="submit btn btn--primary">Login</button>
                </div>
                <nav class="header__nav-wrap">

<a href="/" title="">Return</a>

</nav> 
            </form>
        </div>
    </main>
</x-layout>
