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
                'content_uz' => 'Yuzni aniqlash va tanish uchun AI asosidagi loyiha. Konvolutsion neyron tarmoqlar yordamida yuqori aniqlikda yuzlarni aniqlash.',
                'content_en' => 'AI-based project for face detection and recognition. High-precision face detection using convolutional neural networks.',
                'image' => 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'url' => 'https://example.com/face-ai',
                'project_category_id' => 1,
                'created_at' => now()->subMonths(3),
                'updated_at' => now()->subMonths(3),
            ],
            [
                'title_uz' => 'Talabalar bahosini bashorat qilish',
                'title_en' => 'Student Grade Prediction',
                'content_uz' => 'Mashina o\'rganish yordamida bahoni oldindan aytish. Regression modellari orqali talabalar natijalarini tahmin qilish.',
                'content_en' => 'Predicting grades using machine learning. Predicting student outcomes through regression models.',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'url' => 'https://example.com/ml-grade',
                'project_category_id' => 1,
                'created_at' => now()->subMonths(2),
                'updated_at' => now()->subMonths(2),
            ],
            [
                'title_uz' => 'Avtomatik obyekt aniqlash',
                'title_en' => 'Automatic Object Detection',
                'content_uz' => 'Rasmlarda obyektlarni aniqlovchi tizim. YOLO algoritmi asosida ishlaydigan real vaqtda obyekt aniqlash tizimi.',
                'content_en' => 'System that detects objects in images. Real-time object detection system based on YOLO algorithm.',
                'image' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'url' => 'https://example.com/object-detect',
                'project_category_id' => 2,
                'created_at' => now()->subMonths(4),
                'updated_at' => now()->subMonths(4),
            ],
            [
                'title_uz' => 'Yo\'l belgilari tanish tizimi',
                'title_en' => 'Traffic Sign Recognition',
                'content_uz' => 'Kompyuter ko\'rish orqali yo\'l belgilarini aniqlash. Avtomobil sanoati uchun mo\'ljallangan kengaytirilgan ma\'lumotlar bazasiga ega tizim.',
                'content_en' => 'Recognizing traffic signs using computer vision. System with extended database designed for automotive industry.',
                'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'url' => 'https://example.com/traffic-sign',
                'project_category_id' => 2,
                'created_at' => now()->subMonths(5),
                'updated_at' => now()->subMonths(5),
            ],
            [
                'title_uz' => 'Matnni tahlil qilish',
                'title_en' => 'Text Analysis System',
                'content_uz' => 'Matnni avtomatik tahlil qiluvchi NLP tizimi. Sentiment analysis va matn tasniflash imkoniyatlariga ega.',
                'content_en' => 'NLP system for automatic text analysis. Features sentiment analysis and text classification capabilities.',
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'url' => 'https://example.com/nlp-text',
                'project_category_id' => 3,
                'created_at' => now()->subMonths(6),
                'updated_at' => now()->subMonths(6),
            ],
            [
                'title_uz' => 'Chatbot yaratish',
                'title_en' => 'Chatbot Development',
                'content_uz' => 'Savollarga avtomatik javob beruvchi chatbot. Transformers arxitekturasiga asoslangan aqlli dialog tizimi.',
                'content_en' => 'Chatbot that answers questions automatically. Intelligent dialogue system based on transformers architecture.',
                'image' => 'https://images.unsplash.com/photo-1611224885990-ab7363d1f2a9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'url' => 'https://example.com/chatbot',
                'project_category_id' => 3,
                'created_at' => now()->subMonths(1),
                'updated_at' => now()->subMonths(1),
            ],
            [
                'title_uz' => 'Ovoz orqali buyruq tizimi',
                'title_en' => 'Voice Command System',
                'content_uz' => 'Ovoz orqali boshqariladigan tizim. Speech-to-text texnologiyasi asosida ishlaydigan smart uy tizimi.',
                'content_en' => 'System controlled by voice commands. Smart home system working on speech-to-text technology.',
                'image' => 'https://images.unsplash.com/photo-1589256469067-ea99122bbdc4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                'url' => 'https://example.com/voice-command',
                'project_category_id' => 3,
                'created_at' => now()->subMonths(2),
                'updated_at' => now()->subMonths(2),
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
