<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $name=$this->faker->unique()->word(20);
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'type' => $this->faker->numberBetween(1, 2),
        ];

        Category::create([
            'name'=>'Gamificación',
            'slug' => Str::slug('Gamificación'),
            'type'=> 2

        ]);
        Category::create([
            'name'=>'Plataformas de Interacción',
            'slug' => Str::slug('Plataformas de Interacción'),
            'type'=> 2

        ]);
    }
}
