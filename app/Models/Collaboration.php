<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Collaboration extends Model
{
    protected $fillable = [
        'title_uz',
        'title_en',
        'image',
    ];

    protected static function booted()
    {
        static::deleting(function ($collaboration) {
            if ($collaboration->image && Storage::disk('public')->exists($collaboration->image)) {
                Storage::disk('public')->delete($collaboration->image);
            }
        });

        static::updating(function ($collaboration) {
            if ($collaboration->isDirty('image')) {
                $oldImage = $collaboration->getOriginal('image');
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}
