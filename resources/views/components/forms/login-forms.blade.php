@props([
    'actionForm' => 'login',
    'user' => '',
    'password' => '',
])

<form method="POST" action="{{ route($actionForm) }}">
    @csrf
    <!-- Email Address -->
    <div class=" border border-gray-500 bg-white rounded-md py-1.5" >
        <x-forms.text-input
        type="email"
        id="email"
        label="Email Address"
        required
        autofocus
        />
        <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
    </div>
    <!-- Password -->
    <div class="mt-4 border border-gray-500 bg-white rounded-md py-1.5">
        <x-forms.text-input
        type="password"
        id="password"
        label="Password"
        isPassword="true"
        required
        autofocus
        />
    
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <!-- Remember Me -->
    <div class="flex justify-between mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#D06139] shadow-sm focus:ring-[#D06139]" name="remember">
            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#D06139]" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
    </div>
    <div class="flex items-center justify-end mt-4 w-full">
        <x-buttons.primary-button class="py-3 w-full place-content-center">
            {{ __('Log in') }}
        </x-buttons.primary-button>
    </div>
</form>