<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title'  => fake()->word(),
            'slug'   => fake()->slug(),
            'color'  => fake()->hexColor(),
            'status' => 1,
        ];
    }
}
