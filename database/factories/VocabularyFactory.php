<?php

namespace Database\Factories;

use App\Models\Vocabulary;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class VocabularyFactory extends Factory
{
    protected $model = Vocabulary::class;

    public function definition(): array
    {
        return [
            'term'       => $this->faker->word(),
            'category'   => $this->faker->word(),
            'title'      => $this->faker->words(),
            'definition' => $this->faker->words(),
            'example'    => $this->faker->words(),
            'notes'      => $this->faker->words(),
            'status'     => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
