<?php

namespace App\Imports;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Exam;
use Maatwebsite\Excel\Concerns\ToModel;

class ExamImport implements ToModel, WithHeadingRow

{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Exam([
            'ExamCode'     => $row['examcode'],
            'Name'         => $row['name'],
            'Description'  => $row['description'],
            'IsActive'     => $row['isactive'],
            'SortOrder'    => $row['sortorder'],
            'NoofExams'    => $row['noofexams'],
            'IsSectionTimeLimit' => $row['issectiontimelimit'],
            'IsSingleExam' => $row['issingleexam'],
            'CreatedUser' => '1',
            'TimeSectionLimit' => $row['timesectionlimit'],


        ]);
    }
}
