<?php

namespace App\Models\Api\V1\Pizzas;

use App\Models\Traits\PizzaAccessorsTrait;
use App\Models\Web\V1\Pizzas\Ingredient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany as HasManyCollection;

class Pizza extends Model
{
    use PizzaAccessorsTrait;

    protected $appends = [
        'cost',
    ];
    protected $table = 'pizzas';


    public function ingredients(): HasManyCollection
    {
        return $this->hasMany(
            Ingredient::class,
        );
    }
}
