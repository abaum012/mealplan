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
            'ingredients' => [
                ['name' => 'basmati rice', 'amount' => 1, 'unit' => 'cup', 'category' => 'aisles'],
                ['name' => 'vegetable oil', 'amount' => 1, 'unit' => 'tablespoon', 'category' => 'aisles'],
                ['name' => '(12.8-ounce) package smoked andouille sausage', 'amount' => 1, 'memo' => 'thinly sliced', 'category' => 'aisles'],
                ['name' => 'onion', 'amount' => 1, 'memo' => 'medium', 'category' => 'produce'],
                ['name' => 'green bell pepper', 'amount' => 1, 'memo' => 'diced', 'category' => 'produce'],
                ['name' => 'celery', 'amount' => 2, 'unit' => 'stalk', 'category' => 'produce'],
                ['name' => 'tomato paste', 'amount' => 2, 'unit' => 'tablespoon', 'category' => 'aisles'],
                ['name' => 'garlic', 'amount' => 3, 'unit' => 'clove','memo' => 'minced', 'category' => 'produce'],
                ['name' => 'Cajun seasoning', 'amount' => 1.5, 'unit' => 'teaspoon', 'memo' => 'salt-free', 'category' => 'aisles'],
                ['name' => '(15-ounce can) red beans', 'amount' => 3, 'memo' => 'drained and rinsed', 'category' => 'aisles'],
                ['name' => 'chicken stock', 'amount' => 3, 'unit' => 'cup', 'category' => 'aisles'],
                ['name' => 'hot sauce', 'amount' => 1, 'unit' => 'teaspoon', 'category' => 'aisles'],
                ['name' => 'bay leaf', 'amount' => 1, 'category' => 'produce'],
                ['name' => 'parsley', 'amount' => 2, 'unit' => 'tablespoon', 'memo' => 'chopped', 'category' => 'produce'],
            ],
            'directions' => [
                'In a large saucepan of 2 cups water, cook rice according to package instructions; set aside.',
                'Heat vegetable oil in a large stockpot or Dutch oven over medium heat. Working in batches, add sausage, and cook, stirring frequently, until sausage is lightly browned, about 3-4 minutes; set aside.',
                'Add onion, bell pepper and celery. Cook, stirring occasionally, until tender, about 3-4 minutes.',
                'Stir in tomato paste, garlic and Cajun seasoning until fragrant, about 1 minute.',
                'Stir in red beans, chicken stock, hot sauce, bay leaf and sausage; season with salt and pepper, to taste. Bring to a boil; cover, reduce heat and simmer for 15 minutes. Uncover; continue to simmer until reduced, an additional 15 minutes.',
                'Using a wooden spoon, mash beans until slightly thickened, if desired; season with salt and pepper, to taste.',
                'Serve immediately, topped with rice and garnished with parsley, if desired.',
            ],
        ];
    }
}
