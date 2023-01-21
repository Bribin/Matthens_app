<?php

namespace App\Imports;

use App\Models\ExamAnswer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExamAnswersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {


        return new ExamAnswer([
            'ExamQuestionID'   => $row['examquestionid'],
            'Option'  => $row['option'],
            'Answer'  => $row['answer'],
            'BlobAnswer'    => 'null',
            'AnswerPath'  => 'null',
            'IsCorrectAnswer'  => $row['iscorrectanswer'],
            'Description'  => 'null',
            'SortOrder' => '0',
            'CreatedUser' => '1',
        ]);
    }
}
