<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'AnswerText',
        'IsCorrect'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_answers')->withPivot('question_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
