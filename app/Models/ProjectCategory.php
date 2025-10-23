<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz',
        'name_en',
    ];

    /**
     * Each category can have many projects.
     */
    public function projects()
    {
        return $this->hasMany(Project::class, 'project_category_id');
    }
}
