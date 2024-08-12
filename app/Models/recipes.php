<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recipes extends Model
{
    protected $fillable = ['ingredients', 'status'];

    protected $casts = [
        'ingredients' => 'array', // Cast ingredients to an array
    ];


}
