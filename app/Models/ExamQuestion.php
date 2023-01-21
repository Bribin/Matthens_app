<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{
    protected $guarded = [];
    protected $table = 'exam_questions';
    use HasFactory;

    public function examanswers()
    {
        return $this->hasMany(ExamAnswer::class,'ExamQuestionID');
    }
}
