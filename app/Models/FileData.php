<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileData extends Model
{
    protected $table = "file_contents_data";
    protected $fillable = [
        'FirstName',
        'LastName',
        'JobTitle',
        'Email',
        'Birthdate',
        'Phone',
        'Domain',
        'Comments'
    ];
}
