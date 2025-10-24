<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Storage;

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

    protected static function booted()
    {
        static::deleting(function ($members) {
            if ($members->image && Storage::disk('public')->exists($members->image)) {
                Storage::disk('public')->delete($members->image);
            }
        });

        static::updating(function ($members) {
            if ($members->isDirty('image')) {
                $oldImage = $members->getOriginal('image');
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}
