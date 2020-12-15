<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delihours extends Model
{
    protected $table = 'delihours';

    protected $fillable = ['dayindex'];
    public $timestamps = false;
}