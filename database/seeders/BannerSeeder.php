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
                'title_uz' => 'Sun\'iy intellekt laboratoriyasi',
                'title_en' => 'Artificial Intelligence Laboratory',
                'subtitle_uz' => 'Samarqand davlat universitetida zamonaviy AI tadqiqotlar markazi',
                'subtitle_en' => 'Modern AI research center at Samarkand State University',
                'btn1_text_uz' => 'SI loyihalarni ko\'rish',
                'btn1_text_en' => 'View AI Projects',
                'btn1_url' => '/projects',
                'btn2_text_uz' => 'Batafsil',
                'btn2_text_en' => 'Learn More',
                'btn2_url' => '/about',
                'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80',
                'position' => 1,
                'is_active' => true,
            ],
            [
                'title_uz' => 'Innovatsion tadqiqotlar',
                'title_en' => 'Innovative Research',
                'subtitle_uz' => 'Yangi texnologiyalar va sun\'iy intellekt tadqiqotlari',
                'subtitle_en' => 'New technologies and artificial intelligence research',
                'btn1_text_uz' => 'Tadqiqotlar',
                'btn1_text_en' => 'Research',
                'btn1_url' => '/research',
                'btn2_text_uz' => 'Jamoa',
                'btn2_text_en' => 'Our Team',
                'btn2_url' => '/members',
                'image' => 'https://images.unsplash.com/photo-1620712943543-bcc4688e7485?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80',
                'position' => 2,
                'is_active' => true,
            ],
            [
                'title_uz' => 'Talabalar uchun AI',
                'title_en' => 'AI for Students',
                'subtitle_uz' => 'Talabalar uchun zamonaviy AI loyihalari va dasturlari',
                'subtitle_en' => 'Modern AI projects and programs for students',
                'btn1_text_uz' => 'Boshlash',
                'btn1_text_en' => 'Get Started',
                'btn1_url' => '/start',
                'btn2_text_uz' => 'Loyihalar',
                'btn2_text_en' => 'Projects',
                'btn2_url' => '/projects',
                'image' => 'https://images.unsplash.com/photo-1535223289827-42f1e9919769?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80',
                'position' => 3,
                'is_active' => true,
            ],
            [
                'title_uz' => 'Machine Learning laboratoriyasi',
                'title_en' => 'Machine Learning Lab',
                'subtitle_uz' => 'Ma\'lumotlar tahlili va mashina o\'rganishi bilan shug\'ullanamiz',
                'subtitle_en' => 'Working with data analysis and machine learning',
                'btn1_text_uz' => 'Yo\'nalishlar',
                'btn1_text_en' => 'Directions',
                'btn1_url' => '/directions',
                'btn2_text_uz' => 'Aloqa',
                'btn2_text_en' => 'Contact',
                'btn2_url' => '/contact',
                'image' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80',
                'position' => 4,
                'is_active' => true,
            ],
            [
                'title_uz' => 'Sun\'iy neyron tarmoqlar',
                'title_en' => 'Artificial Neural Networks',
                'subtitle_uz' => 'Rivojlanayotgan texnologiyalar va neyron tarmoqlar',
                'subtitle_en' => 'Emerging technologies and neural networks',
                'btn1_text_uz' => 'Biz haqimizda',
                'btn1_text_en' => 'About Us',
                'btn1_url' => '/about',
                'btn2_text_uz' => 'Bog\'lanish',
                'btn2_text_en' => 'Contact Us',
                'btn2_url' => '/contact',
                'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80',
                'position' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($banners as $banner) {
            Banner::create($banner);
        }
    }
}