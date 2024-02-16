<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'QuestionText',
        'world_id',
        'correct_answer_id'
    ];

    public function world()
    {
        return $this->belongsTo(World::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
