<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'title_en',
        'subtitle_uz',
        'subtitle_en',
        'btn1_text_uz',
        'btn1_text_en',
        'btn1_url',
        'btn2_text_uz',
        'btn2_text_en',
        'btn2_url',
        'image',
        'position',
        'is_active',
    ];
}
