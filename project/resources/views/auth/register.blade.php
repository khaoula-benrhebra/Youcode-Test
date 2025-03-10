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
                <x-label for="first_name" :value="__('Prénom')" />
                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
            </div>

            <!-- Last Name -->
            <div class="mt-4">
                <x-label for="last_name" :value="__('Nom')" />
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Date of Birth -->
            <div class="mt-4">
                <x-label for="dateBorth" :value="__('Date de naissance')" />
                <x-input id="dateBorth" class="block mt-1 w-full" type="date" name="dateBorth" :value="old('dateBorth')" required />
            </div>

            <!-- Address -->
            <div class="mt-4">
                <x-label for="adresse" :value="__('Adresse')" />
                <x-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required />
            </div>

            <!-- CIN -->
            <div class="mt-4">
                <x-label for="CIN" :value="__('Numéro CIN')" />
                <x-input id="CIN" class="block mt-1 w-full" type="text" name="CIN" :value="old('CIN')" required />
            </div>

            <!-- Profile Photo -->
            <div class="mt-4">
                <x-label for="profile_photo" :value="__('Photo de profil')" />
                <x-input id="profile_photo" class="block mt-1 w-full" type="file" name="profile_photo" />
            </div>

            <!-- CIN Photo -->
            <div class="mt-4">
                <x-label for="cin_photo" :value="__('Photo du CIN')" />
                <x-input id="cin_photo" class="block mt-1 w-full" type="file" name="cin_photo" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe')" />
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />
                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà inscrit?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('S\'inscrire') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>