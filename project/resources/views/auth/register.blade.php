<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- First Name -->
            <div>
                <x-label for="first_name" :value="__('First Name')" />
                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" required autofocus />
            </div>

            <!-- Last Name -->
            <div class="mt-4">
                <x-label for="last_name" :value="__('Last Name')" />
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" required />
            </div>

            <!-- Date of Birth -->
            <div class="mt-4">
                <x-label for="date_of_birth" :value="__('Date of Birth')" />
                <x-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" required />
            </div>

            <!-- Telephone -->
            <div class="mt-4">
                <x-label for="telephone" :value="__('Telephone')" />
                <x-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" required />
            </div>

            <!-- Adresse -->
            <div class="mt-4">
                <x-label for="adresse" :value="__('Adresse')" />
                <x-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" required />
            </div>

            <!-- Photo for CIN -->
            <div class="mt-4">
                <x-label for="photo_for_cin" :value="__('Photo for CIN')" />
                <x-input id="photo_for_cin" class="block mt-1 w-full" type="file" name="photo_for_cin" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
