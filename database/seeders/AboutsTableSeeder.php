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
            'content_uz' => "Samarkand Davlat Universiteti — mamlakatimizdagi eng qadimiy va nufuzli oliy taʼlim muassasalaridan biridir. 
            Universitet ilm-fan, taʼlim va innovatsiyalar markazi sifatida nafaqat Oʻzbekistonda, balki butun Markaziy Osiyoda yetakchi oʻrinni egallaydi. 
            Bizning maqsadimiz — zamonaviy texnologiyalarni oʻzlashtirgan, mustaqil fikrlaydigan va raqobatbardosh mutaxassislarni tayyorlashdir.

            Asosiy qadriyatlar:
            - Halollik va masʼuliyat
            - Ilm-fan va innovatsiyaga sodiqlik
            - Talabalarga eʼtibor va doʻstona muhit
            - Hamkorlik va xalqaro aloqalar

            Bugun universitetimiz zamonaviy laboratoriyalar, kutubxona, ilmiy markazlar va startap zonalar bilan jihozlangan. 
            Talabalarga oʻz gʻoyalarini amalga oshirish uchun barcha sharoitlar yaratilgan.",

                        'content_en' => "Samarkand State University is one of the oldest and most prestigious higher education institutions in Uzbekistan. 
            As a center of science, education, and innovation, it holds a leading position not only in Uzbekistan but across Central Asia. 
            Our goal is to educate specialists who are independent thinkers, skilled in modern technologies, and competitive in the global labor market.

            Our core values:
            - Integrity and responsibility
            - Commitment to science and innovation
            - Student-centered and friendly environment
            - Collaboration and international partnership

            Today, our university is equipped with modern laboratories, libraries, research centers, and startup zones. 
            Students are provided with all the necessary opportunities to bring their ideas to life.",
        ]);
    }
}
