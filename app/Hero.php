<?php

namespace Examples;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = ['name', 'description', 'weapon'];
}
