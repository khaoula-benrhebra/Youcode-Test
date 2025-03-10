<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'candidat_id',
        'suggeste_answers_id',
        'score'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

    public function suggestedAnswer()
    {
        return $this->belongsTo(QuestionOption::class, 'suggeste_answers_id');
    }
}