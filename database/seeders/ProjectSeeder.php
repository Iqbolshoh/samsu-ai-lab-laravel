<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title_uz' => 'Aqlli yuz aniqlash tizimi',
                'title_en' => 'Smart Face Detection System',
                'content_uz' => 'Yuzni aniqlash va tanish uchun AI asosidagi loyiha.',
                'content_en' => 'AI-based project for face detection and recognition.',
                'image' => null,
                'url' => 'https://example.com/face-ai',
                'project_category_id' => 1,
            ],
            [
                'title_uz' => 'Talabalar bahosini bashorat qilish',
                'title_en' => 'Student Grade Prediction',
                'content_uz' => 'Mashina o‘rganish yordamida bahoni oldindan aytish.',
                'content_en' => 'Predicting grades using machine learning.',
                'image' => null,
                'url' => 'https://example.com/ml-grade',
                'project_category_id' => 1,
            ],
            [
                'title_uz' => 'Avtomatik obyekt aniqlash',
                'title_en' => 'Automatic Object Detection',
                'content_uz' => 'Rasmlarda obyektlarni aniqlovchi tizim.',
                'content_en' => 'System that detects objects in images.',
                'image' => null,
                'url' => 'https://example.com/object-detect',
                'project_category_id' => 2,
            ],
            [
                'title_uz' => 'Yo‘l belgilari tanish tizimi',
                'title_en' => 'Traffic Sign Recognition',
                'content_uz' => 'Kompyuter ko‘rish orqali yo‘l belgilarini aniqlash.',
                'content_en' => 'Recognizing traffic signs using computer vision.',
                'image' => null,
                'url' => 'https://example.com/traffic-sign',
                'project_category_id' => 2,
            ],
            [
                'title_uz' => 'Matnni tahlil qilish',
                'title_en' => 'Text Analysis System',
                'content_uz' => 'Matnni avtomatik tahlil qiluvchi NLP tizimi.',
                'content_en' => 'NLP system for automatic text analysis.',
                'image' => null,
                'url' => 'https://example.com/nlp-text',
                'project_category_id' => 3,
            ],
            [
                'title_uz' => 'Chatbot yaratish',
                'title_en' => 'Chatbot Development',
                'content_uz' => 'Savollarga avtomatik javob beruvchi chatbot.',
                'content_en' => 'Chatbot that answers questions automatically.',
                'image' => null,
                'url' => 'https://example.com/chatbot',
                'project_category_id' => 3,
            ],
            [
                'title_uz' => 'Ovoz orqali buyruq tizimi',
                'title_en' => 'Voice Command System',
                'content_uz' => 'Ovoz orqali boshqariladigan tizim.',
                'content_en' => 'System controlled by voice commands.',
                'image' => null,
                'url' => 'https://example.com/voice-command',
                'project_category_id' => 3,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
