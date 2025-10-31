<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'title_uz',
        'title_en',
        'address_uz',
        'address_en',
        'email_1',
        'email_2',
        'phone_1',
        'phone_2',
        'map_iframe',
        'facebook',
        'instagram',
        'telegram',
        'youtube',
    ];
}
