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
                'content_uz' => 'Samarqand davlat universitetida zamonaviy sun\'iy intellekt laboratoriyasi ochildi. Yangi laboratoriya talabalar va professorlar uchun innovatsion loyihalar amalga oshirish imkoniyatini yaratdi.',
                'content_en' => 'A modern artificial intelligence laboratory has been opened at Samarkand State University. The new laboratory provides opportunities for students and professors to implement innovative projects.',
                'image' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(10),
            ],
            [
                'type' => 'news',
                'title_uz' => 'Talabalar hackathon g\'olibi',
                'title_en' => 'Students Won Hackathon',
                'content_uz' => 'SamDU AI laboratoriyasi talabalari "TechStars 2024" xalqaro hackathonida 1-o\'rinni qo\'lga kiritdi. Loyiha sun\'iy intellekt yordamida qishloq xo\'jaligida hosildorlikni prognozlashga qaratilgan.',
                'content_en' => 'SamSU AI laboratory students won first place at the "TechStars 2024" international hackathon. The project focuses on predicting agricultural productivity using artificial intelligence.',
                'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'created_at' => now()->subDays(7),
                'updated_at' => now()->subDays(7),
            ],
            [
                'type' => 'announcement',
                'title_uz' => 'Yangi kursga qabul boshlandi',
                'title_en' => 'New Course Registration Open',
                'content_uz' => 'AI laboratoriyasi tomonidan "Machine Learning asoslari" va "Deep Learning amaliyoti" kurslariga qabul boshlangan. Kurslar onlayn va oflayn formatda olib boriladi.',
                'content_en' => 'Registration for "Fundamentals of Machine Learning" and "Deep Learning Practice" courses by AI Laboratory has begun. Courses are conducted in online and offline formats.',
                'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],
            [
                'type' => 'news',
                'title_uz' => 'Professorlar trening o\'tkazdi',
                'title_en' => 'Professors Held Training',
                'content_uz' => 'AI laboratoriyasi professorlari tomonidan 50 nafar o\'qituvchi uchun "Zamonaviy AI texnologiyalari" mavzusida trening o\'tkazildi. Treningda ChatGPT, DALL-E va boshqa AI vositalari bilan ishlash o\'rgatildi.',
                'content_en' => 'Training on "Modern AI Technologies" was conducted by AI laboratory professors for 50 teachers. The training covered working with ChatGPT, DALL-E and other AI tools.',
                'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'created_at' => now()->subDays(4),
                'updated_at' => now()->subDays(4),
            ],
            [
                'type' => 'announcement',
                'title_uz' => 'Startap tanloviga arizalar qabul qilinadi',
                'title_en' => 'Startup Contest Registration',
                'content_uz' => '"AI for Future" startap tanlovi uchun arizalar qabul qilinmoqda. G\'olib loyiha 10.000$ grant va Google bilan hamkorlik imkoniyatini qo\'lga kiritadi. Muddati: 20-dekabr.',
                'content_en' => 'Applications are now open for the "AI for Future" startup competition. The winning project will receive a $10,000 grant and partnership opportunity with Google. Deadline: December 20.',
                'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'created_at' => now()->subDays(3),
                'updated_at' => now()->subDays(3),
            ],
            [
                'type' => 'news',
                'title_uz' => 'Robototexnika tanlovi bo\'lib o\'tdi',
                'title_en' => 'Robotics Competition Held',
                'content_uz' => 'Universitetda birinchi robototexnika tanlovi muvaffaqiyatli o\'tkazildi. 15 ta jamoa o\'z loyihalarini namoyish etdi. G\'olib "AI Robotix" jamoasi bo\'ldi.',
                'content_en' => 'The first robotics competition was successfully held at the university. 15 teams showcased their projects. The winner was the "AI Robotix" team.',
                'image' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],
            [
                'type' => 'announcement',
                'title_uz' => 'AI konferensiyaga taklif',
                'title_en' => 'Invitation to AI Conference',
                'content_uz' => '20-dekabr kuni "AI va Kelajak" nomli xalqaro konferensiya bo\'lib o\'tadi. Konferensiyada dunyoning yetakchi AI mutaxassislari ishtirok etadi. Barcha talabalar va professorlar taklif etiladi.',
                'content_en' => 'An international conference "AI and the Future" will be held on December 20. Leading AI experts from around the world will participate. All students and professors are invited.',
                'image' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],
        ]);
    }
}
