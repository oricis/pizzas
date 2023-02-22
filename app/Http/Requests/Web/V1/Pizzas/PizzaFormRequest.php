<?php

namespace App\Http\Requests\Web\V1\Pizzas;

use Illuminate\Foundation\Http\FormRequest;

class PizzaFormRequest extends FormRequest
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
        $slug = $this->has('slug')
            ? $this->slug
            : (($this->has('name')) ? $this->name : '');
        $this->merge([
            'active' => (int) $this->active ?? 1,
            'alt'    => $this->has('alt') ? ucfirst($this->alt) : null,
            'name'   => $this->has('name') ? ucfirst($this->name) : null,
            'slug'   => ($temp = slugify($slug, '-')) ? $temp : null,
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
            'alt'     => 'nullable|max:125',  //+34 949836169
            'name'    => 'required|bail|max:120',
            'slug'    => 'required|max:150',
            'src'     => 'nullable|max:255',
        ];
    }
}
