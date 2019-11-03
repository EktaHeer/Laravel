<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['sname','standard'];
    public $timestamps = false;                // Insert data into db without created at and updated at
}
