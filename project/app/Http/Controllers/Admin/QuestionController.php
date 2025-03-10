<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateQuestionRequest;
use App\Http\Requests\Admin\UpdateQuestionRequest;
use App\Models\Question;
use App\Models\QuestionOption;
use Illuminate\Support\Facades\Gate;

class QuestionController extends Controller
{
    public function index()
    {
        Gate::authorize('creat_qst');
        $questions = Question::with('options')->get();
        return view('admin.questions.index', compact('questions'));
    }

   
    public function store(CreateQuestionRequest $request)
{
    $question = Question::create([
        'text' => $request->text,
        'points' => $request->points
    ]);
    
    foreach ($request->options as $index => $optionText) {
        QuestionOption::create([
            'question_id' => $question->id,
            'text' => $optionText,
            'is_correct' => $index == $request->correct_option
        ]);
    }

    return redirect()->back()->with('success', 'Question créée avec succès');
}

public function update(UpdateQuestionRequest $request, Question $question)
{
    $question->update([
        'text' => $request->text,
        'points' => $request->points
    ]);
    
    $question->options()->delete();
    
    foreach ($request->options as $index => $optionText) {
        QuestionOption::create([
            'question_id' => $question->id,
            'text' => $optionText,
            'is_correct' => $index == $request->correct_option
        ]);
    }

    return redirect()->back()->with('success', 'Question mise à jour');
}
    public function destroy(Question $question)
    {
        Gate::authorize('delete_qst');
        $question->delete();
        return redirect()->back()->with('success', 'Question supprimée');
    }
}