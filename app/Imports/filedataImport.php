<?php

namespace App\Imports;

use App\Models\FileData;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class filedataImport implements ToModel,WithHeadingRow,WithUpserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public $file;
    public function model(array $row)
    {
        return new FileData([
            'id' => $row['id'],
            'FirstName' => $row['firstname'],
            'LastName' => $row['lastname'],
            'JobTitle' => $row['jobtitle'],
            'Email' => $row['email'],
            'Birthdate' => $row['birthdate'],
            'Phone' => $row['phone'],
            'Domain' => $row['domain'],
            'Comments' => $row['comments']
        ]);
    }

    /**
     */
    public function uniqueBy() {
        return [
            'email',
        ];
	}
    
}
