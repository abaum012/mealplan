<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $title = $this->faker->company,
            'url' => $this->faker->url,
            'slug' => Str::slug($title),
            'ingredients' => ['eggs' => 2, 'flour' => '2 cups'],
            'steps' => ['beat eggs', 'add flour'],
        ];
    }
}
