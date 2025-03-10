<?php

namespace App\Http\Controllers\Candidat;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\CandidatAnswer;
use App\Models\Question;
use App\Models\QuestionOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class QuizCandidatController extends Controller
{
    public function index()
    {
        Gate::authorize('pass_quiz');
        
        $user = Auth::user();
        $candidat = $user->candidat;
        
        $hasPassedQuiz = $candidat->passedQuizzes()->exists();
        
        return view('candidat.quiz.index', compact('hasPassedQuiz'));
    }
    
    public function start()
    {
        Gate::authorize('pass_quiz');
        
        $user = Auth::user();
        $candidat = $user->candidat;
        
        
        if ($candidat->passedQuizzes()->exists()) {
            return redirect()->route('candidat.quiz.index')
                ->with('error', 'Vous avez déjà passé un quiz.');
        }
        
      
        $quiz = Quiz::inRandomOrder()->first();
        
        if (!$quiz) {
            return redirect()->route('candidat.quiz.index')
                ->with('error', 'Aucun quiz disponible pour le moment.');
        }
        
        session(['current_quiz_id' => $quiz->id]);
        
        return view('candidat.quiz.take', compact('quiz'));
    }
    
    public function submit(Request $request)
    {
        Gate::authorize('pass_quiz');
        
        $user = Auth::user();
        $candidat = $user->candidat;
        $quizId = session('current_quiz_id');
        
        if (!$quizId) {
            return redirect()->route('candidat.quiz.index')
                ->with('error', 'Aucun quiz en cours.');
        }
        
        $quiz = Quiz::with('questions.options')->findOrFail($quizId);
        $score = 0;
        foreach ($quiz->questions as $question) {
            $answerId = $request->input('question_' . $question->id);
            
            if ($answerId) {
                $answer = QuestionOption::find($answerId);
                
              
                CandidatAnswer::create([
                    'quiz_id' => $quiz->id,
                    'candidat_id' => $candidat->id,
                    'suggeste_answers_id' => $answerId,
                    'score' => 0
                ]);
                
                
                if ($answer && $answer->is_correct) {
                    $score += $question->points ?? 1; 
                }
            }
        }
        
        
        CandidatAnswer::where('quiz_id', $quiz->id)
            ->where('candidat_id', $candidat->id)
            ->update(['score' => $score]);
        
       
        session()->forget('current_quiz_id');
        
        return redirect()->route('candidat.quiz.result')
            ->with('success', 'Merci! Votre tentative a été enregistrée.');
    }
    
    public function result()
    {
        return view('candidat.quiz.result');
    }
}