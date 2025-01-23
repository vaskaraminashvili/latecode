<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Creator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        Category::create([
            "title" => [
                "ka" => 'ამოხსნები',
                "en" => 'solutions'
            ],
            "slug" => str()->slug('solutions'),
            "description" => [
                "ka" => "solutions category description",
                "en" => "solutions category description"
            ],
            "status" => true
        ]);
    }
}
