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
                'image' => 'https://iqbolshoh.uz/images/logos/iqbolshoh.jpg',
            ],
            [
                'name_uz' => 'Dilshod Rasulov',
                'name_en' => 'Dilshod Rasulov',
                'role_uz' => 'Computer Vision mutaxassisi',
                'role_en' => 'Computer Vision Specialist',
                'bio_uz' => 'Rasm va video tahlili bilan shug‘ullanadi.',
                'bio_en' => 'Works on image and video analysis.',
                'image' => 'https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name_uz' => 'Malika Abdullayeva',
                'name_en' => 'Malika Abdullayeva',
                'role_uz' => 'NLP tadqiqotchisi',
                'role_en' => 'NLP Researcher',
                'bio_uz' => 'Matn va til texnologiyalarini o‘rganadi.',
                'bio_en' => 'Studies text and language technologies.',
                'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name_uz' => 'Shahzoda Aliyeva',
                'name_en' => 'Shahzoda Aliyeva',
                'role_uz' => 'Frontend dizayner',
                'role_en' => 'Frontend Designer',
                'bio_uz' => 'Interfeys va dizayn ustida ishlaydi.',
                'bio_en' => 'Works on UI and design.',
                'image' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name_uz' => 'Bekzod Rahimov',
                'name_en' => 'Bekzod Rahimov',
                'role_uz' => 'Data analyst',
                'role_en' => 'Data Analyst',
                'bio_uz' => 'Ma’lumotlarni tahlil qiladi.',
                'bio_en' => 'Analyzes data.',
                'image' => 'https://images.unsplash.com/photo-1564564321837-a57b7070ac4f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name_uz' => 'Azizbek Karimov',
                'name_en' => 'Azizbek Karimov',
                'role_uz' => 'Machine Learning muhandisi',
                'role_en' => 'Machine Learning Engineer',
                'bio_uz' => 'Mashina o‘rganish modellarini ishlab chiqadi.',
                'bio_en' => 'Develops machine learning models.',
                'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
            ],
            [
                'name_uz' => 'Jasur Qodirov',
                'name_en' => 'Jasur Qodirov',
                'role_uz' => 'Backend dasturchi',
                'role_en' => 'Backend Developer',
                'bio_uz' => 'Server va ma’lumotlar bazasi bilan ishlaydi.',
                'bio_en' => 'Works with servers and databases.',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
            ],
        ];

        foreach ($members as $member) {
            Member::create($member);
        }
    }
}
