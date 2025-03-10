<x-app-layout>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Menu de navigation -->
            <div class="bg-gray-900 text-white mb-6 rounded-lg shadow-md">
                <nav class="flex">
                    <a href="#dashboard"
                        class="px-4 py-3 hover:bg-gray-800 rounded-tl-lg transition duration-200 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Accueil
                    </a>
                    <a href="#questions" class="px-4 py-3 hover:bg-gray-800 transition duration-200 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Questions
                    </a>
                    <a href="#quiz" class="px-4 py-3 hover:bg-gray-800 transition duration-200 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        Quiz
                    </a>
                </nav>
            </div>

            <!-- Contenu principal -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Section d'accueil -->
                <div id="dashboard" class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-4 text-blue-600">Bienvenue sur votre tableau de bord</h3>
                        <p class="text-gray-700">Vous pouvez gérer les questions et les quiz à partir de cette
                            interface.</p>
                    </div>

                    <!-- Statistiques -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                            <div class="flex items-center">
                                <div class="bg-blue-500 rounded-full p-3 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Total Questions</p>
                                    <p class="text-xl font-bold text-gray-800">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                            <div class="flex items-center">
                                <div class="bg-blue-500 rounded-full p-3 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Total Quiz</p>
                                    <p class="text-xl font-bold text-gray-800">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                            <div class="flex items-center">
                                <div class="bg-blue-500 rounded-full p-3 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Utilisateurs</p>
                                    <p class="text-xl font-bold text-gray-800">0</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Activités récentes -->
                    <div>
                        <h3 class="text-lg font-bold mb-4 text-blue-600">Activités récentes</h3>
                        <div class="bg-gray-50 p-4 rounded-md">
                            <p class="text-gray-700">Aucune activité récente.</p>
                        </div>
                    </div>
                </div>

                <!-- Section de gestion des questions -->
                <div id="questions" class="p-6 bg-white border-b border-gray-200 hidden">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold text-blue-600">Gestion des Questions</h3>
                        <button id="addQuestionBtn"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md flex items-center transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            Ajouter une question
                        </button>
                    </div>

                    <!-- Formulaire d'ajout de question (initialement caché) -->
                    <div id="questionForm" class="bg-gray-50 p-6 rounded-lg mb-6 hidden">
                        <h4 class="text-lg font-semibold mb-4 text-gray-800">Nouvelle Question</h4>
                        <form action="{{ route('admin.questions.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="questionText" class="block text-gray-700 mb-2">Texte de la question</label>
                                <textarea id="questionText" name="text" rows="3"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                    required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="questionPoints" class="block text-gray-700 mb-2">Points</label>
                                <input type="number" id="questionPoints" name="points" min="1" value="1"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Propositions</label>
                                <div id="options" class="space-y-3">
                                    <div class="flex items-center">
                                        <input type="radio" name="correct_option" value="0" class="mr-2" required>
                                        <input type="text" name="options[]"
                                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                            placeholder="Proposition 1" required>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" name="correct_option" value="1" class="mr-2">
                                        <input type="text" name="options[]"
                                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                            placeholder="Proposition 2" required>
                                    </div>
                                </div>
                                <button type="button" id="addOption"
                                    class="mt-2 text-blue-600 hover:text-blue-800 text-sm flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Ajouter une proposition
                                </button>
                            </div>

                            <div class="flex justify-end space-x-2">
                                <button type="button" id="cancelQuestion"
                                    class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 transition duration-200">Annuler</button>
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">Enregistrer</button>
                            </div>
                        </form>
                    </div>

                    <!-- Liste des questions -->
                    <div class="bg-white shadow-md rounded-md overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Question</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Propositions</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($questions as $question)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $question->id }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900">{{ $question->text }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            @foreach($question->options as $option)
                                                {{ $option->text }}
                                                @if($option->is_correct) (Correcte) @endif
                                                <br>
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button
                                            onclick="editQuestion({{ $question->id }}, '{{ addslashes($question->text) }}', {{ $question->points }}, {{ json_encode($question->options) }})"
                                            class="text-blue-600 hover:text-blue-900 mr-3">Modifier</button>


                                            <form action="{{ route('admin.questions.destroy', $question->id) }}"
                                                method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900">Supprimer</button>
                                            </form>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500" colspan="4">Aucune
                                            question disponible</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div id="editQuestionForm" class="bg-gray-50 p-6 rounded-lg mb-6 hidden">

                        <h4 class="text-lg font-semibold mb-4 text-gray-800">Modifier la Question
                        </h4>
                        <form id="questionEditForm" action="" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="editQuestionText" class="block text-gray-700 mb-2">Texte
                                    de la question</label>
                                <textarea id="editQuestionText" name="text" rows="3"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                    required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="editQuestionPoints" class="block text-gray-700 mb-2">Points</label>
                                <input type="number" id="editQuestionPoints" name="points" min="1"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Propositions</label>
                                <div id="editOptions" class="space-y-3">
                                    <!-- Les options seront ajoutées dynamiquement via JavaScript -->
                                </div>
                                <button type="button" id="addEditOption"
                                    class="mt-2 text-blue-600 hover:text-blue-800 text-sm flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Ajouter une proposition
                                </button>
                            </div>

                            <div class="flex justify-end space-x-2">
                                <button type="button" id="cancelEditQuestion"
                                    class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 transition duration-200">Annuler</button>
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">Mettre
                                    à jour</button>
                            </div>
                        </form>
                    </div>

                </div>

                <!-- Section de gestion des quiz -->
                <div id="quiz" class="p-6 bg-white border-b border-gray-200 hidden">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold text-blue-600">Gestion des Quiz</h3>
                        <button id="addQuizBtn"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md flex items-center transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            Créer un quiz
                        </button>
                    </div>

                    <!-- Formulaire de création de quiz (initialement caché) -->
                    <div id="quizForm" class="bg-gray-50 p-6 rounded-lg mb-6 hidden">
                        <h4 class="text-lg font-semibold mb-4 text-gray-800">Nouveau Quiz</h4>
                        <form action="{{ route('admin.quizzes.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="quizTitle" class="block text-gray-700 mb-2">Titre du quiz</label>
                                <input type="text" id="quizTitle" name="title"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="quizDescription" class="block text-gray-700 mb-2">Description</label>
                                <textarea id="quizDescription" name="description" rows="3"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Sélectionner les questions</label>
                                <div class="max-h-64 overflow-y-auto bg-white p-3 border border-gray-300 rounded-md">
                                    @foreach($questions as $question)
                                        <div class="flex items-center mb-2">
                                            <input type="checkbox" name="questions[]" value="{{ $question->id }}"
                                                class="mr-2">
                                            <span>{{ $question->text }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="flex justify-end space-x-2">
                                <button type="button" id="cancelQuiz"
                                    class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 transition duration-200">Annuler</button>
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">Enregistrer</button>
                            </div>
                        </form>
                    </div>

                    <!-- Liste des quiz -->
                   <!-- Liste des quiz -->
<div class="bg-white shadow-md rounded-md overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Titre</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Questions</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($quizzes as $quiz)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $quiz->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $quiz->title }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ $quiz->description }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        {{ $quiz->questions->count() }} questions
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <button onclick="editQuiz({{ $quiz->id }}, '{{ addslashes($quiz->title) }}', '{{ addslashes($quiz->description) }}', {{ json_encode($quiz->questions->pluck('id')) }})" class="text-blue-600 hover:text-blue-900 mr-3">Modifier</button>
                        <form action="{{ route('admin.quizzes.destroy', $quiz->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500" colspan="5">Aucun quiz disponible</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
                    <!-- Formulaire d'édition de quiz (initialement caché) -->
                    <div id="editQuizForm" class="bg-gray-50 p-6 rounded-lg mb-6 hidden">
                        <h4 class="text-lg font-semibold mb-4 text-gray-800">Modifier le Quiz</h4>
                        <form id="quizEditForm" action="" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="editQuizTitle" class="block text-gray-700 mb-2">Titre du quiz</label>
                                <input type="text" id="editQuizTitle" name="title"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="editQuizDescription" class="block text-gray-700 mb-2">Description</label>
                                <textarea id="editQuizDescription" name="description" rows="3"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Sélectionner les questions</label>
                                <div class="max-h-64 overflow-y-auto bg-white p-3 border border-gray-300 rounded-md">
                                    @foreach($questions as $question)
                                        <div class="flex items-center mb-2">
                                            <input type="checkbox" name="questions[]" value="{{ $question->id }}"
                                                class="mr-2 edit-quiz-question">
                                            <span>{{ $question->text }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="flex justify-end space-x-2">
                                <button type="button" id="cancelEditQuiz"
                                    class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 transition duration-200">Annuler</button>
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">Mettre
                                    à jour</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>

    {{--
    <script>


    </script> --}}
</x-app-layout>