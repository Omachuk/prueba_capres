<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $fillable = ['rol', 'descripcion','estado'];

    public function comments()
    {
        return $this->hasMany('App\User');
    }
}
