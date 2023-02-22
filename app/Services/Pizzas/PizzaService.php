<?php

namespace App\Services\Pizzas;

use App\Http\Requests\Web\V1\Pizzas\PizzaFormRequest;
use App\Models\Api\V1\Pizzas\Pizza;
use App\Services\MainService;

class PizzaService extends MainService
{

    public function store(PizzaFormRequest  $request): bool
    {
        try {
            Pizza::create($request->validated());
        } catch (\Throwable $th) {
            return false;
        }
        return true;
    }

    public function update(PizzaFormRequest $request, int $id): bool
    {
        # TODO:

        return true;
    }
}
