<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['title', 'description', 'duration'];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'quiz_question');
    }
    
    public function candidatAnswers()
    {
        return $this->hasMany(CandidatAnswer::class);
    }

    public function candidates()
    {
        return $this->belongsToMany(Candidat::class, 'candidat_answers')
                    ->distinct();
    }
}