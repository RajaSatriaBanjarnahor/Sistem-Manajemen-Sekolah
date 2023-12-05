<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'tbl_students';
    protected $primaryKey = 'StudentID';
    protected $fillable = ['FirstName', 'LastName', 'DateofBirth', 'Gender', 'PhoneNumber', 'ClassID'];
}
