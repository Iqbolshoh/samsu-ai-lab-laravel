<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name_uz',
        'name_en',
        'role_uz',
        'role_en',
        'bio_uz',
        'bio_en',
        'image',
    ];
}
