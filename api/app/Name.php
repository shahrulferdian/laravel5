<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $table = 'names';
    protected $fillable = ['first', 'last'];
}
