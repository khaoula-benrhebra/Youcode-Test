<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord candidat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-bold mb-4">Bonjour {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
                    
                    @if(Auth::user()->candidat->passedQuizzes()->exists())
                        <div class="bg-blue-100 p-4 rounded-lg border border-blue-200 mb-6">
                            <p class="text-blue-800">Vous avez déjà passé le test. Nous analyserons vos résultats et vous serez notifié en cas de réussite.</p>
                        </div>
                    @else
                        <div class="bg-blue-100 p-4 rounded-lg border border-blue-200 mb-6">
                            <p class="text-blue-800 mb-4">Bienvenue dans le test Youcode!</p>
                            <a href="{{ route('candidat.quiz.start') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Passer le quiz
                            </a>
                        </div>
                    @endif
                    
                    <p class="mt-4">En tant que candidat, vous pouvez télécharger des documents et passer des quiz.</p>
                    
                    <div class="mt-6">
                        <h4 class="text-md font-semibold mb-2">Vos permissions :</h4>
                        <ul class="list-disc pl-5">
                            @foreach(Auth::user()->role->permissions as $permission)
                                <li>{{ $permission->id }}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="mt-6">
                        <h4 class="text-md font-semibold mb-2">Vos informations :</h4>
                        <p>Date de naissance : {{ Auth::user()->candidat->dateBorth }}</p>
                        <p>Adresse : {{ Auth::user()->candidat->adresse }}</p>
                        <p>CIN : {{ Auth::user()->candidat->CIN }}</p>
                    </div>
                    
                    <div class="mt-6">
                        <h4 class="text-md font-semibold mb-2">Vos documents :</h4>
                        @if(Auth::user()->candidat->documents->count() > 0)
                            <ul class="list-disc pl-5">
                                @foreach(Auth::user()->candidat->documents as $document)
                                    <li>
                                        {{ $document->type }} 
                                        <a href="{{ Storage::url($document->path) }}" target="_blank" class="text-blue-500 hover:underline">
                                            Voir le document
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>Aucun document téléchargé pour le moment.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>