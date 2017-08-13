<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $fillable = ['id', 'code', 'name', 'createdAt', 'updatedAt'];
    public $timestamps = false;
}
