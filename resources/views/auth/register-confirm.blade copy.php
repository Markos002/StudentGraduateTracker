<x-guest-layout>
    <form method="POST" action="{{ route('register-confirm-data') }}">
        @csrf

        <!-- Student ID -->
        <div>
            <x-input-label for="studentId" :value="__('Student ID')" />
            <x-text-input id="studentId" class="block mt-1 w-full" type="text" name="student_id" :value="old('studentId', $studentData['studentId'])" readonly />
            <x-input-error :messages="$errors->get('studentId')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div>
            <x-input-label for="lastName" :value="__('Last Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="last_name"  :value="old('lastName', $studentData['lastName'])"  required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- First Name -->
        <div class="mt-4">
            <x-input-label for="firstName" :value="__('First Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="first_name" :value="old('firstName', $studentData['firstName'])" required autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="name" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="name" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
