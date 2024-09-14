<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'ai'
        ]);
        Category::create([
            'name' => 'Big Data',
            'slug' => 'big-data'
        ]);
        Category::create([
            'name' => 'Cyber Security',
            'slug' => 'cyber-security'
        ]);
    }
}
