document.addEventListener('DOMContentLoaded', function() {
    // Code existant pour la navigation
    const navLinks = document.querySelectorAll('nav a');
    const sections = document.querySelectorAll('#dashboard, #questions, #quiz');
    
    document.getElementById('dashboard').classList.remove('hidden');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = this.getAttribute('href').substring(1);
            
            sections.forEach(section => {
                section.classList.add('hidden');
            });
            document.getElementById(target).classList.remove('hidden');
            
            navLinks.forEach(navLink => {
                navLink.classList.remove('bg-gray-800');
            });
            this.classList.add('bg-gray-800');
        });
    });
    
    // Code existant pour le formulaire d'ajout de question
    const addQuestionBtn = document.getElementById('addQuestionBtn');
    const questionForm = document.getElementById('questionForm');
    const cancelQuestion = document.getElementById('cancelQuestion');
    
    addQuestionBtn?.addEventListener('click', function() {
        questionForm.classList.remove('hidden');
        // Cacher le formulaire de modification s'il est ouvert
        if (editQuestionForm) {
            editQuestionForm.classList.add('hidden');
        }
    });
    
    cancelQuestion?.addEventListener('click', function() {
        questionForm.classList.add('hidden');
    });
    
    // Code existant pour ajouter des options
    const addOption = document.getElementById('addOption');
    const optionsContainer = document.getElementById('options');
    
    addOption?.addEventListener('click', function() {
        addNewOption(optionsContainer, 'options[]');
    });

    // Nouvelles fonctions pour le formulaire de modification
    const editQuestionForm = document.getElementById('editQuestionForm');
    const cancelEditQuestion = document.getElementById('cancelEditQuestion');
    const addEditOption = document.getElementById('addEditOption');
    const editOptionsContainer = document.getElementById('editOptions');
    
    // Fonction pour annuler la modification
    cancelEditQuestion?.addEventListener('click', function() {
        editQuestionForm.classList.add('hidden');
    });
    
    // Fonction pour ajouter une option au formulaire de modification
    addEditOption?.addEventListener('click', function() {
        addNewOption(editOptionsContainer, 'options[]');
    });
    
    // Fonction générique pour ajouter une nouvelle option
    function addNewOption(container, optionName) {
        const optionCount = container.children.length;
        const newOption = document.createElement('div');
        newOption.className = 'flex items-center';
        newOption.innerHTML = `
            <input type="radio" name="correct_option" value="${optionCount}" class="mr-2">
            <input type="text" name="${optionName}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" placeholder="Proposition ${optionCount + 1}" required>
            <button type="button" class="text-red-500 ml-2 delete-option">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        `;
        container.appendChild(newOption);
        
        // Ajout de l'écouteur de suppression pour le nouveau bouton
        const deleteButtons = newOption.querySelectorAll('.delete-option');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                this.parentElement.remove();
                // Mettre à jour les valeurs des boutons radio
                updateRadioValues(container);
            });
        });
    }
    
    // Fonction pour mettre à jour les valeurs des boutons radio
    function updateRadioValues(container) {
        const radios = container.querySelectorAll('input[type="radio"]');
        radios.forEach((radio, index) => {
            radio.value = index;
        });
    }

    // Code existant pour le quiz
    const addQuizBtn = document.getElementById('addQuizBtn');
    const quizForm = document.getElementById('quizForm');
    const cancelQuiz = document.getElementById('cancelQuiz');
    
    addQuizBtn?.addEventListener('click', function() {
        quizForm.classList.remove('hidden');
    });
    
    cancelQuiz?.addEventListener('click', function() {
        quizForm.classList.add('hidden');
    });
    
    // Ajouter les écouteurs pour supprimer les options existantes
    document.querySelectorAll('.delete-option').forEach(button => {
        button.addEventListener('click', function() {
            this.parentElement.remove();
        });
    });
});

// Fonction globale pour éditer une question
function editQuestion(id, text, points, options) {
    const editForm = document.getElementById('editQuestionForm');
    const formAction = `/admin/questions/${id}`;
    const editQuestionText = document.getElementById('editQuestionText');
    const editQuestionPoints = document.getElementById('editQuestionPoints');
    const editOptionsContainer = document.getElementById('editOptions');
    
    // Configurer le formulaire
    document.getElementById('questionEditForm').action = formAction;
    editQuestionText.value = text;
    editQuestionPoints.value = points;
    
    // Vider les options existantes
    editOptionsContainer.innerHTML = '';
    
    // Ajouter les options existantes
    options.forEach((option, index) => {
        const optionDiv = document.createElement('div');
        optionDiv.className = 'flex items-center mb-2';
        optionDiv.innerHTML = `
            <input type="radio" name="correct_option" value="${index}" class="mr-2" ${option.is_correct ? 'checked' : ''}>
            <input type="text" name="options[]" value="${option.text}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
            <button type="button" class="text-red-500 ml-2 delete-option">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        `;
        editOptionsContainer.appendChild(optionDiv);
    });
    
    // Ajouter les écouteurs pour supprimer les options
    editOptionsContainer.querySelectorAll('.delete-option').forEach(button => {
        button.addEventListener('click', function() {
            this.parentElement.remove();
            // Mettre à jour les indices des boutons radio
            updateRadioValues(editOptionsContainer);
        });
    });
    
    // Fonction pour mettre à jour les valeurs des boutons radio
    function updateRadioValues(container) {
        const radios = container.querySelectorAll('input[type="radio"]');
        radios.forEach((radio, index) => {
            radio.value = index;
        });
    }
    
    // Afficher le formulaire
    editForm.classList.remove('hidden');
    
    // Masquer le formulaire d'ajout s'il est ouvert
    const addForm = document.getElementById('questionForm');
    if (addForm) {
        addForm.classList.add('hidden');
    }
    
    // Faire défiler jusqu'au formulaire
    editForm.scrollIntoView({ behavior: 'smooth' });
}

// Fonction pour éditer un quiz
function editQuiz(id, title, description, selectedQuestions) {
    const editForm = document.getElementById('editQuizForm');
    const formAction = `/admin/quizzes/${id}`;
    const editQuizTitle = document.getElementById('editQuizTitle');
    const editQuizDescription = document.getElementById('editQuizDescription');
    
    // Configurer le formulaire
    document.getElementById('quizEditForm').action = formAction;
    editQuizTitle.value = title;
    editQuizDescription.value = description;
    
    // Réinitialiser toutes les cases à cocher
    document.querySelectorAll('.edit-quiz-question').forEach(checkbox => {
        checkbox.checked = false;
    });
    
    // Cocher les questions sélectionnées
    selectedQuestions.forEach(questionId => {
        const checkbox = document.querySelector(`.edit-quiz-question[value="${questionId}"]`);
        if (checkbox) {
            checkbox.checked = true;
        }
    });
    
    // Afficher le formulaire d'édition
    editForm.classList.remove('hidden');
    
    // Masquer le formulaire d'ajout s'il est ouvert
    const addForm = document.getElementById('quizForm');
    if (addForm) {
        addForm.classList.add('hidden');
    }
    
    // Faire défiler jusqu'au formulaire
    editForm.scrollIntoView({ behavior: 'smooth' });
}

// Ajouter l'écouteur d'événement pour le bouton d'annulation d'édition
document.addEventListener('DOMContentLoaded', function() {
    // Code existant...
    
    // Formulaire d'édition de quiz
    const editQuizForm = document.getElementById('editQuizForm');
    const cancelEditQuiz = document.getElementById('cancelEditQuiz');
    
    cancelEditQuiz?.addEventListener('click', function() {
        editQuizForm.classList.add('hidden');
    });
});