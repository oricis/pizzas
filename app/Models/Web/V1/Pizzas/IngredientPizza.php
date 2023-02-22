<?php

namespace App\Models\Web\V1\Pizzas;

use Illuminate\Database\Eloquent\Model;

class IngredientPizza extends Model
{
    protected $fillable = [
        'pizza_id',
        'ingredient_id',
    ];
    protected $table = 'ingredient_pizza';
}
