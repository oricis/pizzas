<?php

namespace App\Models\Web\V1\Pizzas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany as BelongsToManyCollection;

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


    public function ingredients(): BelongsToManyCollection
    {
        return $this->belongsToMany(
            Pizza::class,
            'ingredient_pizza',
            'pizza_id',
            'ingredient_id'
        );
    }
}
