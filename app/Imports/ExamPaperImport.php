<?php

namespace App\Imports;

use App\Models\ExamPaper;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExamPaperImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {


        return new ExamPaper([
            'ExamCode'     => $row['examcode'],
            'PaperCode'  => $row['papercode'],
            'Name'  => $row['name'],
            'Description'     => $row['description'],
            'IsActive'    => $row['isactive'],
            'IsnegativeApplicable'    => $row['isnegativeapplicable'],
            'NoofQuestions' => $row['noofquestions'],
            'MinQuestionstoAnswer' => $row['minquestionstoanswer'],
            'CorrectMark'    => $row['correctmark'],
            'NegativeMark' => $row['negativemark'],
            'UnattendedMark' => $row['unattendedmark'],
            'CutOffMark'    => $row['cutoffmark'],
            'IsAllAnswerMandatory' => $row['isallanswermandatory'],
            'TotalMinutes' => $row['totalminutes'],
            'IsSectionSwitchAllowed' => $row['issectionswitchallowed'],
            'SortOrder' => $row['sortorder'],
            'CreatedUser' => '1',
        ]);
    }
}
