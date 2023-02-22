<?php

namespace App\Models\Traits;

trait PizzaAccessorsTrait
{

    public function getCostAttribute()
    {
        $ingredientPrices = $this->ingredients->pluck('price');

        $total = 0;
        foreach ($ingredientPrices as $price) {
            $total += $price;
        }

        return $total + $total * 0.5;
    }
}
