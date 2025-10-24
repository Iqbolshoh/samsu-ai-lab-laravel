<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    protected $fillable = [
        'page',
        'hero_title_uz',
        'hero_title_en',
        'hero_subtitle_uz',
        'hero_subtitle_en',
        'cta_title_uz',
        'cta_title_en',
        'cta_subtitle_uz',
        'cta_subtitle_en',
        'cta_button_text_uz',
        'cta_button_text_en',
    ];
}
