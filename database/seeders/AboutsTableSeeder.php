<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title_uz' => 'Biz haqimizda',
            'title_en' => 'About Us',
            'content_uz' => '<p>Bu yerda bizning universitet va ilmiy faoliyatimiz haqida ma\'lumot beriladi.</p>',
            'content_en' => '<p>This section contains information about our university and research activities.</p>',
        ]);
    }
}
