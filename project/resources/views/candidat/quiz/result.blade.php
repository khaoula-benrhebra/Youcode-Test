<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Résultat du Quiz') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <div class="bg-blue-100 p-6 rounded-lg border border-blue-200 text-center">
                        <h3 class="text-xl font-bold text-blue-800 mb-4">Merci pour votre participation!</h3>
                        <p class="text-blue-800 mb-4">Votre tentative a été enregistrée.</p>
                        <p class="text-blue-800">En cas de réussite au test, vous serez notifié prochainement.</p>
                        
                        <div class="mt-6">
                            <a href="{{ route('candidat.dashboard') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Retour au tableau de bord
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>