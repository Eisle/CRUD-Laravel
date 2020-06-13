<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';

    protected $fillable = ['id', 'nis', 'name', 'rombel', 'rayon'];
}
