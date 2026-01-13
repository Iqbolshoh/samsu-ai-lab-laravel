<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'type' => 'news',
                'title_uz' => 'AI laboratoriya ochildi',
                'title_en' => 'AI Laboratory Opened',
                'content_uz' => 'Universitetda sun’iy intellekt laboratoriyasi ish boshladi.',
                'content_en' => 'An artificial intelligence laboratory has started working at the university.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'news',
                'title_uz' => 'Talabalar hackathon g‘olibi',
                'title_en' => 'Students Won Hackathon',
                'content_uz' => 'SamDU talabalari xalqaro hackathonda 1-o‘rinni oldi.',
                'content_en' => 'SamSU students won first place in an international hackathon.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'announcement',
                'title_uz' => 'Yangi kursga qabul boshlandi',
                'title_en' => 'New Course Registration Open',
                'content_uz' => 'Dasturlash va AI kurslariga qabul boshlandi.',
                'content_en' => 'Registration for programming and AI courses is now open.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'news',
                'title_uz' => 'Professorlar trening o‘tkazdi',
                'title_en' => 'Professors Held Training',
                'content_uz' => 'O‘qituvchilar uchun IT trening bo‘lib o‘tdi.',
                'content_en' => 'An IT training was held for teachers.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'announcement',
                'title_uz' => 'Startap tanloviga arizalar qabul qilinadi',
                'title_en' => 'Startup Contest Registration',
                'content_uz' => 'Startap loyihalar uchun arizalar qabul qilinmoqda.',
                'content_en' => 'Applications for startup projects are now open.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'news',
                'title_uz' => 'Robototexnika tanlovi bo‘lib o‘tdi',
                'title_en' => 'Robotics Competition Held',
                'content_uz' => 'Robototexnika bo‘yicha tanlov muvaffaqiyatli o‘tkazildi.',
                'content_en' => 'A robotics competition was successfully held.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'announcement',
                'title_uz' => 'AI konferensiyaga taklif',
                'title_en' => 'Invitation to AI Conference',
                'content_uz' => 'Barcha talabalar AI konferensiyaga taklif etiladi.',
                'content_en' => 'All students are invited to the AI conference.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
