<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['sname','standard'];
    public $timestamps = false;
    
    protected $table = 'students';
}