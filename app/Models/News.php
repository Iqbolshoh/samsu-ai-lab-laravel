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
        'video',
        'url',
    ];

    protected static function booted()
    {
        /*
        |--------------------------------------------------------------------------
        | DELETE → image + video + editor files
        |--------------------------------------------------------------------------
        */
        static::deleting(function ($news) {

            self::deleteFile($news->image);
            self::deleteFile($news->video);

            self::deleteEditorFiles($news->content_uz);
            self::deleteEditorFiles($news->content_en);
        });


        /*
        |--------------------------------------------------------------------------
        | UPDATE → eski image/video ni avtomatik o‘chirish
        |--------------------------------------------------------------------------
        */
        static::saving(function ($news) {

            if (!$news->exists)
                return;

            $old = self::find($news->id);
            if (!$old)
                return;

            // image changed
            if ($news->isDirty('image')) {
                self::deleteFile($old->image);
            }

            // video changed
            if ($news->isDirty('video')) {
                self::deleteFile($old->video);
            }

            // editor ichidan o‘chirilgan fayllarni tozalash
            self::deleteRemovedFiles($old->content_uz, $news->content_uz);
            self::deleteRemovedFiles($old->content_en, $news->content_en);
        });
    }


    /*
    |--------------------------------------------------------------------------
    | UNIVERSAL FILE DELETE (DRY principle)
    |--------------------------------------------------------------------------
    */
    private static function deleteFile($path)
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | DELETE all editor files (post delete)
    |--------------------------------------------------------------------------
    */
    private static function deleteEditorFiles($content)
    {
        if (!$content)
            return;

        preg_match_all('/src="([^"]+)"/', $content, $matches);

        foreach ($matches[1] as $fileUrl) {
            $path = str_replace(asset('storage') . '/', '', $fileUrl);
            self::deleteFile($path);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | DELETE removed editor files (post update)
    |--------------------------------------------------------------------------
    */
    private static function deleteRemovedFiles($oldContent, $newContent)
    {
        preg_match_all('/src="([^"]+)"/', $oldContent ?? '', $oldMatches);
        preg_match_all('/src="([^"]+)"/', $newContent ?? '', $newMatches);

        $removed = array_diff($oldMatches[1], $newMatches[1]);

        foreach ($removed as $fileUrl) {
            $path = str_replace(asset('storage') . '/', '', $fileUrl);
            self::deleteFile($path);
        }
    }
}