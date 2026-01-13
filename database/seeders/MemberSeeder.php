<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            [
                'name_uz' => 'Iqbolshoh Ilhomjonov',
                'name_en' => 'Iqbolshoh Ilhomjonov',
                'role_uz' => 'Loyiha asoschisi va Full-stack dasturchi',
                'role_en' => 'Founder and Full-stack Developer',
                'bio_uz' => 'Sun’iy intellekt va web texnologiyalar bilan ishlovchi dasturchi.',
                'bio_en' => 'Developer working with AI and web technologies.',
                'image' => null,
            ],
            [
                'name_uz' => 'Azizbek Karimov',
                'name_en' => 'Azizbek Karimov',
                'role_uz' => 'Machine Learning muhandisi',
                'role_en' => 'Machine Learning Engineer',
                'bio_uz' => 'Mashina o‘rganish modellarini ishlab chiqadi.',
                'bio_en' => 'Develops machine learning models.',
                'image' => null,
            ],
            [
                'name_uz' => 'Dilshod Rasulov',
                'name_en' => 'Dilshod Rasulov',
                'role_uz' => 'Computer Vision mutaxassisi',
                'role_en' => 'Computer Vision Specialist',
                'bio_uz' => 'Rasm va video tahlili bilan shug‘ullanadi.',
                'bio_en' => 'Works on image and video analysis.',
                'image' => null,
            ],
            [
                'name_uz' => 'Malika Abdullayeva',
                'name_en' => 'Malika Abdullayeva',
                'role_uz' => 'NLP tadqiqotchisi',
                'role_en' => 'NLP Researcher',
                'bio_uz' => 'Matn va til texnologiyalarini o‘rganadi.',
                'bio_en' => 'Studies text and language technologies.',
                'image' => null,
            ],
            [
                'name_uz' => 'Jasur Qodirov',
                'name_en' => 'Jasur Qodirov',
                'role_uz' => 'Backend dasturchi',
                'role_en' => 'Backend Developer',
                'bio_uz' => 'Server va ma’lumotlar bazasi bilan ishlaydi.',
                'bio_en' => 'Works with servers and databases.',
                'image' => null,
            ],
            [
                'name_uz' => 'Shahzoda Aliyeva',
                'name_en' => 'Shahzoda Aliyeva',
                'role_uz' => 'Frontend dizayner',
                'role_en' => 'Frontend Designer',
                'bio_uz' => 'Interfeys va dizayn ustida ishlaydi.',
                'bio_en' => 'Works on UI and design.',
                'image' => null,
            ],
            [
                'name_uz' => 'Bekzod Rahimov',
                'name_en' => 'Bekzod Rahimov',
                'role_uz' => 'Data analyst',
                'role_en' => 'Data Analyst',
                'bio_uz' => 'Ma’lumotlarni tahlil qiladi.',
                'bio_en' => 'Analyzes data.',
                'image' => null,
            ],
        ];

        foreach ($members as $member) {
            Member::create($member);
        }
    }
}
