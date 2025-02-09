<?php

namespace Database\Factories;

use App\Enums\DifficultyLevel;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition(): array
    {
        $code_data = [
            [
                "content"  => "php aris kvdari",
                "language" => "PHP"
            ]
        ];
        return [
            'title'       => $this->generateTranslatableField(['ka', 'en']),
            'description' => $this->generateTranslatableField(['ka', 'en']),
            'code'        => $code_data,
            'slug'        => $this->faker->slug(),
            'status'      => 1,
            'category_id' => 1,
            'difficulty'  => $this->faker->randomElement(DifficultyLevel::class),
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ];
    }

    protected function generateTranslatableField(
        array $locales,
              $number = 4
    ): array
    {
        $field = [];
        foreach ($locales as $locale) {
            $field[$locale]
                = $this->faker->sentence($number); // Generate fake data for each locale
        }
        return $field;
    }
}
