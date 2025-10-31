<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        $activities = [
            [
                'title_uz' => "Ilg'or tadqiqot",
                'title_en' => "Advanced Research",
                'description_uz' => "Mashinali o'rganish, chuqur o'rganish va neyron tarmoqlarida zamonaviy sun'iy intellekt tadqiqotlari.",
                'description_en' => "Modern AI research in machine learning, deep learning, and neural networks.",
            ],
            [
                'title_uz' => "Innovatsiya markazi",
                'title_en' => "Innovation Center",
                'description_uz' => "Sun'iy intellekt texnologiyalari orqali real muammolarga innovatsion yechimlar yaratish.",
                'description_en' => "Creating innovative solutions to real-world problems through AI technologies.",
            ],
            [
                'title_uz' => "Hamkorlik",
                'title_en' => "Collaboration",
                'description_uz' => "Dunyo bo'ylab sanoat liderlari va akademik muassasalar bilan hamkorlik qilish.",
                'description_en' => "Collaborating with industry leaders and academic institutions worldwide.",
            ],
            [
                'title_uz' => "Kelajak o'sishi",
                'title_en' => "Future Growth",
                'description_uz' => "Sun'iy intellekt tadqiqotchilari va mutaxassislarining keyingi avlodini tayyorlash.",
                'description_en' => "Preparing the next generation of AI researchers and experts.",
            ],
        ];

        foreach ($activities as $activity) {
            Activity::create($activity);
        }
    }
}
