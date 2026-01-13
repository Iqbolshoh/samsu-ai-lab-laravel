<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectCategory;

class ProjectCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name_uz' => 'Mashina o‘rganish', 'name_en' => 'Machine Learning'],
            ['name_uz' => 'Kompyuter ko‘rish', 'name_en' => 'Computer Vision'],
            ['name_uz' => 'Til texnologiyalari', 'name_en' => 'NLP'],
        ];

        foreach ($categories as $category) {
            ProjectCategory::create($category);
        }
    }
}
