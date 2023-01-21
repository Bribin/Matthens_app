<?php

namespace App\Imports;

use App\Models\ExamSubject;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExamSubjectImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ExamSubject([
            'ExamSubjectCode'   => $row['examsubjectcode'],
            'Name'  => $row['name'],
            'Description'  => $row['description'],
            'IsActive'    => $row['isactive'],
            'SortOrder' => $row['sortorder'],
            'CreatedUser' => '1',
        ]);
    }
}
