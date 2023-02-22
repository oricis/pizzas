<?php

namespace App\Http\Controllers\Web\V1\Ingredients;

use App\Http\Controllers\Web\WebController;
use App\Http\Requests\Web\V1\Pizzas\Ingredients\IngredientFormRequest;
use App\Models\Web\V1\Ingredients\Pizza;
use App\Services\Pizzas\IngredientService;

class IngredientsController extends WebController
{
    private string $view = 'pages.ingredients.';
    private string $indexRoute = 'ingredients.index';
    private string $model = Pizza::class;


    public function index(int $rows = 0)
    {
        // TODO:
        $data = [];

        return $this->indexViews($data);
    }

    public function create()
    {
        return view($this->view . 'create');
    }

    public function store(
        IngredientFormRequest $request,
        IngredientService $service
    )
    {
        $success = $service->store($request);
        $this->messageOk = 'Pizza cread@';

        return ($success)
            ? $this->goTo($this->indexRoute, $success)
            : redirect()
                ->back()
                ->withInput()
                ->with('error', $this->messageErr);
    }

    public function show(int $id)
    {
        $data = $this->model::findOrFail($id);

        return view($this->view . 'show')
            ->with('pizza', $data);
    }

    public function edit(int $id)
    {
        $data = $this->model::findOrFail($id);

        return view($this->view . 'edit')
            ->with('pizza', $data);
    }

    public function update(
        IngredientFormRequest $request,
        int $id,
        IngredientService $service
    )
    {
        $success = $service->update($request, $id);
        $this->messageErr = 'Pizza NO actualizad@';
        $this->messageOk = 'Pizza actualizad@';

        return ($success)
            ? $this->goTo($this->indexRoute, $success)
            : redirect()
                ->back()
                ->withInput()
                ->with('error', $this->messageErr);
    }


    private function indexViews($data)
    {
        return view($this->view . 'index')
            ->with('rows', $data);
    }
}
