<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        $banners = [
            [
                'title_uz' => 'Sun’iy intellekt laboratoriyasi',
                'title_en' => 'Artificial Intelligence Laboratory',
                'subtitle_uz' => 'Samarqand davlat universitetida sun’iy intellekt laboratoriyasi',
                'subtitle_en' => 'Artificial Intelligence Laboratory at Samarkand State University',
                'btn1_text_uz' => 'SI loyihalarni ko‘rish',
                'btn1_text_en' => 'View AI Projects',
                'btn1_url' => '/projects',
                'btn2_text_uz' => 'Batafsil',
                'btn2_text_en' => 'Learn More',
                'btn2_url' => '/about',
                'image' => null,
                'position' => 1,
                'is_active' => true,
            ],
            [
                'title_uz' => 'Innovatsion tadqiqotlar',
                'title_en' => 'Innovative Research',
                'subtitle_uz' => 'Ilm-fan va texnologiya birlashgan joy',
                'subtitle_en' => 'Where science and technology meet',
                'btn1_text_uz' => 'Tadqiqotlar',
                'btn1_text_en' => 'Research',
                'btn1_url' => '/research',
                'btn2_text_uz' => 'Jamoa',
                'btn2_text_en' => 'Our Team',
                'btn2_url' => '/members',
                'image' => null,
                'position' => 2,
                'is_active' => true,
            ],
            [
                'title_uz' => 'Talabalar uchun AI',
                'title_en' => 'AI for Students',
                'subtitle_uz' => 'Talabalar uchun zamonaviy AI loyihalari',
                'subtitle_en' => 'Modern AI projects for students',
                'btn1_text_uz' => 'Boshlash',
                'btn1_text_en' => 'Get Started',
                'btn1_url' => '/start',
                'btn2_text_uz' => 'Loyihalar',
                'btn2_text_en' => 'Projects',
                'btn2_url' => '/projects',
                'image' => null,
                'position' => 3,
                'is_active' => true,
            ],
            [
                'title_uz' => 'AI orqali kelajak',
                'title_en' => 'Future with AI',
                'subtitle_uz' => 'Texnologiya bilan ertangi kun',
                'subtitle_en' => 'Tomorrow with technology',
                'btn1_text_uz' => 'Yo‘nalishlar',
                'btn1_text_en' => 'Directions',
                'btn1_url' => '/directions',
                'btn2_text_uz' => 'Aloqa',
                'btn2_text_en' => 'Contact',
                'btn2_url' => '/contact',
                'image' => null,
                'position' => 4,
                'is_active' => true,
            ],
            [
                'title_uz' => 'AI laboratoriyaga xush kelibsiz',
                'title_en' => 'Welcome to AI Lab',
                'subtitle_uz' => 'Bilim, tajriba va innovatsiya markazi',
                'subtitle_en' => 'Center of knowledge, experience and innovation',
                'btn1_text_uz' => 'Biz haqimizda',
                'btn1_text_en' => 'About Us',
                'btn1_url' => '/about',
                'btn2_text_uz' => 'Bog‘lanish',
                'btn2_text_en' => 'Contact Us',
                'btn2_url' => '/contact',
                'image' => null,
                'position' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($banners as $banner) {
            Banner::create($banner);
        }
    }
}
