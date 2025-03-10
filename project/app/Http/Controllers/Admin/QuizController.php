<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateQuizRequest;
use App\Http\Requests\Admin\UpdateQuizRequest;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Support\Facades\Gate;

class QuizController extends Controller
{
    public function index()
    {
        Gate::authorize('creat_quize'); 
        $quizzes = Quiz::with('questions')->get();
        $questions = Question::all();
        return view('admin.quizzes.index', compact('quizzes', 'questions'));
    }

    public function store(CreateQuizRequest $request)
{
    $quiz = Quiz::create([
        'title' => $request->title,
        'description' => $request->description,
        'duration' => $request->duration ?? '5 minutes'
    ]);

    $quiz->questions()->attach($request->questions);

    return redirect()->back()->with('success', 'Quiz créé avec succès');
}


public function update(UpdateQuizRequest $request, Quiz $quiz)
{
    $quiz->update([
        'title' => $request->title,
        'description' => $request->description,
        'duration' => $request->duration ?? '5 minutes'
    ]);

    $quiz->questions()->sync($request->questions);

    return redirect()->back()->with('success', 'Quiz mis à jour');
}

    public function destroy(Quiz $quiz)
    {
        Gate::authorize('delete_quize');
        $quiz->delete();
        return redirect()->back()->with('success', 'Quiz supprimé');
    }
}