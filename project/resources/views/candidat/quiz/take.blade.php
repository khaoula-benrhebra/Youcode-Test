<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Passer le Quiz') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-bold mb-2">{{ $quiz->title }}</h3>
                    <p class="mb-4">{{ $quiz->description }}</p>
                    
                    <div class="mb-6">
                        <div class="p-3 bg-blue-100 rounded-lg">
                            <p class="text-blue-800">
                                <strong>Durée:</strong> {{ $quiz->duration ?? '5 minutes' }}
                            </p>
                        </div>
                    </div>
                    
                    <form action="{{ route('candidat.quiz.submit') }}" method="POST">
                        @csrf
                        
                        @foreach($quiz->questions as $index => $question)
                            <div class="mb-6 p-4 border rounded-lg @if($index % 2 == 0) bg-gray-50 @endif">
                                <h4 class="font-bold mb-3">{{ $index + 1 }}. {{ $question->text }}</h4>
                                
                                @foreach($question->options as $option)
                                    <div class="mb-2">
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="question_{{ $question->id }}" value="{{ $option->id }}" class="form-radio h-5 w-5 text-blue-600">
                                            <span class="ml-2">{{ $option->text }}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                        
                        <div class="mt-6">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Terminer le quiz
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>