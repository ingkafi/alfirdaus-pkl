<x-guest-layout>
    <x-jet-authentication-card>
        {{-- <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot> --}}

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <div class="relative w-full">
                    <div class="absolute inset-y-0 right-0 flex items-center px-2">
                        <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                        <label
                            class="bg-gray-200 hover:bg-green-200 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer js-password-label"
                            for="toggle">show</label>
                    </div>
                    <x-jet-input id="password" class="block mt-1 w-full js-password" type="password" name="password"
                        required autocomplete="current-password" />
                </div>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="ml-2 float-left text-sm font-mono text-gray-600" href="/">
                    << Back </a>
                        <x-jet-button class="ml-4 bg-green-400 hover:bg-green-600">
                            {{ __('Login') }}
                        </x-jet-button>
            </div>
        </form>
        <script>
            const passwordToggle = document.querySelector('.js-password-toggle')

            passwordToggle.addEventListener('change', function() {
                const password = document.querySelector('.js-password'),
                    passwordLabel = document.querySelector('.js-password-label')

                if (password.type === 'password') {
                    password.type = 'text'
                    passwordLabel.innerHTML = 'hide'
                } else {
                    password.type = 'password'
                    passwordLabel.innerHTML = 'show'
                }

                password.focus()
            })

        </script>
    </x-jet-authentication-card>
</x-guest-layout>
