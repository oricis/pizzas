<?php

use App\Models\Web\V1\Pizzas\Ingredient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $this->seedIngredients();
    }


    public function seedIngredients(): void
    {
        Ingredient::create([
            'name'  => 'Queso mexcla',
            'price' => 1.0,
        ]);
        Ingredient::create([
            'name'  => 'Tomate',
            'price' => 1.2,
        ]);
        Ingredient::create([
            'name'  => 'Cebolla',
            'price' => 0.75,
        ]);
        Ingredient::create([
            'name'  => 'Anchoas',
            'price' => 3.0,
        ]);
        Ingredient::create([
            'name'  => 'Mozzarella',
            'price' => 2.0,
        ]);
    }
}
