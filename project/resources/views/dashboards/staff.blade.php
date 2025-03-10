<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-bold mb-4">Bonjour {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
                    <p>Bienvenue sur votre tableau de bord staff.</p>
                    <p class="mt-4">En tant que membre du staff, vous pouvez gérer les candidats et voir le tableau de bord.</p>
                    
                    <div class="mt-6">
                        <h4 class="text-md font-semibold mb-2">Vos permissions :</h4>
                        <ul class="list-disc pl-5">
                            @foreach(Auth::user()->role->permissions as $permission)
                                <li>{{ $permission->id }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>