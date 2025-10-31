<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title_uz',
        'title_en',
        'content_uz',
        'content_en',
        'image',
        'url',
    ];

    protected static function booted()
    {
        static::deleting(function ($news) {
            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }

            self::deleteEditorFiles($news->content_uz);
            self::deleteEditorFiles($news->content_en);
        });

        static::saving(function ($news) {
            if ($news->exists) {
                $old = self::find($news->id);
                if ($old) {
                    if ($news->isDirty('image')) {
                        $oldImage = $old->image;
                        if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                            Storage::disk('public')->delete($oldImage);
                        }
                    }

                    self::deleteRemovedFiles($old->content_uz, $news->content_uz);
                    self::deleteRemovedFiles($old->content_en, $news->content_en);
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
