<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    protected $guarded = [];
    protected $table = 'exam_answers';
    use HasFactory;

    public function examquestion()
    {
        return $this->belongsTo(ExamQuestion::class,'ExamQuestionID');
    }
}
