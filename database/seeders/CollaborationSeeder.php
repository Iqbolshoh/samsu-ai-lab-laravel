<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Collaboration;

class CollaborationSeeder extends Seeder
{
    public function run(): void
    {
        $collaborations = [
            [
                'title_uz' => 'Biz bilan hamkorlik qiling',
                'title_en' => 'Collaborate with us',
                'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d',
            ],
            [
                'title_uz' => 'Startaplar uchun hamkorlik',
                'title_en' => 'Partnership for startups',
                'image' => 'https://images.unsplash.com/photo-1556761175-4b46a572b786',
            ],
            [
                'title_uz' => 'Texnologik hamkorlik',
                'title_en' => 'Technology partnership',
                'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c',
            ],
        ];

        foreach ($collaborations as $collaboration) {
            Collaboration::create($collaboration);
        }
    }
}
