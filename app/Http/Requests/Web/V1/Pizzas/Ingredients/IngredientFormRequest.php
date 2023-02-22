<?php

namespace App\Http\Requests\Web\V1\Pizzas\Ingredients;

use Illuminate\Foundation\Http\FormRequest;

class IngredientFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'active' => (int) $this->active ?? 1,
            'name'   => $this->has('name') ? ucfirst($this->name) : null,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'active'  => 'integer|between:0,1',
            'name'    => 'required|max:120',
            'price'   => 'required|numeric|min:0',
        ];
    }
}
