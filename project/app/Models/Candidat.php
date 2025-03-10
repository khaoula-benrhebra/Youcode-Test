<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateBorth',
        'adresse',
        'CIN',
        'user_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
    
    public function answers()
{
    return $this->hasMany(CandidatAnswer::class);
}

public function passedQuizzes()
{
    return $this->belongsToMany(Quiz::class, 'candidat_answers')
                ->distinct();
}
}
