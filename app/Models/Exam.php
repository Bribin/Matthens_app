<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded = [];
    public $incrementing = false;
    protected $primaryKey = 'ExamCode';

    use HasFactory;
}
