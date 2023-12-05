<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'tbl_admins';
    protected $primaryKey = 'AdminID';
    protected $fillable = ['FirstName', 'LastName', 'DateofBirth', 'Gender', 'PhoneNumber'];
}
