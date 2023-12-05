<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'tbl_teachers';
    protected $primaryKey = 'TeacherID';
    protected $fillable = ['FirstName', 'LastName', 'DateofBirth', 'Gender', 'PhoneNumber', 'SubjectTaught'];
}
