<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'tbl_subjects';
    protected $fillable = [ 'name', 'class','action'];

}
