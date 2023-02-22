<?php

namespace App\Services\Pizzas;

use App\Http\Requests\Web\V1\Pizzas\Ingredients\IngredientFormRequest;
use App\Models\Web\V1\Pizzas\Ingredient;
use App\Services\MainService;

class IngredientService extends MainService
{

    public function store(IngredientFormRequest  $request)
    {
        try {
            Ingredient::create($request->validated());
        } catch (\Throwable $th) {
            return false;
        }
        return true;
    }

        public function update(IngredientFormRequest $request, int $id): bool
    {
        # TODO:

        return true;
    }
}
