<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Youcode') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <h3 class="text-lg font-bold mb-4">Quiz d'admission Youcode</h3>
                    
                    @if($hasPassedQuiz)
                        <div class="bg-blue-100 p-4 rounded-lg border border-blue-200">
                            <p class="text-blue-800">Vous avez déjà passé le test. Merci pour votre participation.</p>
                            <p class="text-blue-800 mt-2">Nous analyserons vos résultats et vous serez notifié en cas de réussite.</p>
                        </div>
                    @else
                        <div class="bg-blue-100 p-4 rounded-lg border border-blue-200">
                            <p class="text-blue-800 mb-4">Bienvenue au test d'admission Youcode!</p>
                            <p class="text-blue-800 mb-4">Ce test évaluera vos connaissances et compétences. Une fois commencé, vous devrez terminer le test dans le temps imparti.</p>
                            
                            <a href="{{ route('candidat.quiz.start') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Commencer le test
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>