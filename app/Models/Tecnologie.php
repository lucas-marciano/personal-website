<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecnologie extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'nivel', 
        'link', 
        'photo',
        'isactive'
    ];
}
