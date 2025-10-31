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

            'content_uz' => '
                <p>Ilmiy tadqiqot yo‘nalishlari: Sun’iy intellekt, robototexnika, tasvirlar va signallarni raqamli ishlov berish, mashinaviy o‘qitish.</p>

                <p>Laboratoriyaning asosiy vazifalari:</p>
                <ul>
                    <li>Sensor qurilmalari orqali ma’lumotlarni to‘plash va mashinaviy o‘qitish asosida havo va suvning ifloslanish darajalari hamda suyuqliklar tarkibini aniqlash uchun sun’iy intellektga asoslangan model va algoritmlar ishlab chiqish.</li>
                    <li>Tibbiy tasvirlar va signallarni raqamli ishlov berish asosida tibbiy tashxislash uchun sun’iy intellektga asoslangan model va algoritmlar ishlab chiqish.</li>
                    <li>Iqtisodiy ko‘rsatkichli ma’lumotlarni intellektual qayta ishlash orqali iqtisodiyotning barqarorligini tahlil qilish uchun AI modellar va algoritmlar ishlab chiqish.</li>
                    <li>Robot qurilmalarini yaratish va boshqarish; robotlar uchun tabiiy til modellarini ishlab chiqish orqali xizmat ko‘rsatish sifatini oshirish usullarini ishlab chiqish.</li>
                </ul>
            ',

            'content_en' => '
                <p>Research directions: Artificial intelligence, robotics, digital image and signal processing, and machine learning.</p>

                <p>The main objectives of the laboratory:</p>
                <ul>
                    <li>Collect data through sensor devices and develop AI-based models and algorithms using machine learning to detect air and water pollution levels and analyze liquid compositions.</li>
                    <li>Develop AI-based models and algorithms for medical diagnostics through digital processing of medical images and signals.</li>
                    <li>Analyze economic stability using AI-based models and algorithms through intelligent processing of economic data.</li>
                    <li>Design and control robotic devices and develop natural language models for robots to improve service quality through AI-based methods.</li>
                </ul>
            ',
        ]);
    }
}
