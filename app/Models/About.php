<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $fillable = [
        'title_uz',
        'title_en',
        'content_uz',
        'content_en',
    ];

    protected static function booted()
    {
        static::deleting(function ($about) {
            self::deleteEditorFiles($about->content_uz);
            self::deleteEditorFiles($about->content_en);
        });

        static::saving(function ($about) {
            if ($about->exists) {
                $old = self::find($about->id);
                if ($old) {
                    self::deleteRemovedFiles($old->content_uz, $about->content_uz);
                    self::deleteRemovedFiles($old->content_en, $about->content_en);
                }
            }
        });
    }

    private static function deleteEditorFiles($content)
    {
        preg_match_all('/src="([^"]+)"/', $content, $matches);
        foreach ($matches[1] as $fileUrl) {
            $path = str_replace(asset('storage') . '/', '', $fileUrl);
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }
    }

    private static function deleteRemovedFiles($oldContent, $newContent)
    {
        preg_match_all('/src="([^"]+)"/', $oldContent, $oldMatches);
        preg_match_all('/src="([^"]+)"/', $newContent, $newMatches);

        $removed = array_diff($oldMatches[1], $newMatches[1]);
        foreach ($removed as $fileUrl) {
            $path = str_replace(asset('storage') . '/', '', $fileUrl);
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }
    }
}
