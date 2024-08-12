<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients'; // Assuming your table name is 'ingredients'
    protected $fillable = ['name']; // Assuming 'name' is a fillable attribute
}
