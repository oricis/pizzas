<?php

namespace App\Models\Web\V1\Pizzas;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $appends = [

    ];
    protected $fillable = [
        'active',
        'name',
        'price',
    ];
    protected $table = 'ingredients';
}
