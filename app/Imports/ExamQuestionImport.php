<?php

namespace App\Imports;

use App\Models\ExamQuestion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExamQuestionImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {


        return new ExamQuestion([
            'ExamCode'     => $row['examcode'],
            'PaperCode'  => $row['papercode'],
            'SectionCode'  => $row['sectioncode'],
            'ExamSubjectCode'  => $row['examsubjectcode'],
            'ExamLanguage'  => $row['examlanguage'],
            'DifficultyLevel'     => $row['difficultylevel'],
            'AccountType' => $row['accounttype'],
            'IsQuestionBlob'    => $row['isquestionblob'],
            'Description'    => $row['description'],
            'BlobDescription'    => 'Null',
            'QuestionPath'    => $row['questionpath'],
            'SortOrder' => '0',
            'CreatedUser' => '1',
        ]);
    }
}
