<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPaper extends Model
{
    protected $guarded = [];
    protected $table = 'exam_papers';
    protected $primaryKey = 'PaperCode';
    public $incrementing = false;
    use HasFactory;
}
