<?php

namespace App\Imports;

use App\Models\ExamSection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExamSectionImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ExamSection([
            'ExamCode'     => $row['examcode'],
            'PaperCode'  => $row['papercode'],
            'SectionCode'  => $row['sectioncode'],
            'Name'  => $row['name'],
            'Description'     => $row['description'],
            'NoofQuestions' => $row['noofquestions'],
            'IsActive'    => $row['isactive'],
            'SortOrder' => $row['sortorder'],
            'CreatedUser' => '1',
        ]);
    }
}
