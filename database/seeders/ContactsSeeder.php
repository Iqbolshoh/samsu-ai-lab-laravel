<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([
            'title_uz' => 'Bog‘lanish',
            'title_en' => 'Contact',
            'address_uz' => 'Samarqand Davlat Universiteti, Universitet Bulvari 15, Samarqand, O‘zbekiston',
            'address_en' => 'Samarkand State University, University Boulevard 15, Samarkand, Uzbekistan',
            'email_1' => 'ai.lab@samdu.uz',
            'email_2' => 'research@samdu.uz',
            'phone_1' => '+998 66 239 12 34',
            'phone_2' => '+998 66 239 12 35',
            'map_iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d478.08205995335965!2d66.96893978477132!3d39.638302013318715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d1f3276fe4935%3A0xee0b4d1956b92271!2sIntellektual%20Tizimlar%20va%20Kompyuter%20Texnalogiyalari%20fakulteti!5e1!3m2!1sru!2s!4v1761928735339!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
    }
}
