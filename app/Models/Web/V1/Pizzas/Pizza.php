<?php

namespace App\Models\Web\V1\Pizzas;

use App\Models\Traits\PizzaAccessorsTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany as HasManyCollection;

class Pizza extends Model
{
    use PizzaAccessorsTrait;


    protected $appends = [

    ];
    protected $fillable = [
        'active',
        'name',
        'slug',
        'src',
        'alt',
    ];
    protected $table = 'pizzas';


    public function ingredients(): HasManyCollection
    {
        return $this->hasMany(
            Ingredient::class,
        );
    }
}
