<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'title_en',
        'content_uz',
        'content_en',
        'image',
        'url',
        'project_category_id',
    ];

    /**
     * Relationship: Each project belongs to one category.
     */
    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }

    protected static function booted()
    {
        static::deleting(function ($projects) {
            if ($projects->image && Storage::disk('public')->exists($projects->image)) {
                Storage::disk('public')->delete($projects->image);
            }
        });

        static::updating(function ($projects) {
            if ($projects->isDirty('image')) {
                $oldImage = $projects->getOriginal('image');
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}

