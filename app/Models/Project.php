<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

