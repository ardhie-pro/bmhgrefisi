<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $baseSlug = Str::slug($model->title);
            $slug = $baseSlug;

            $counter = 1;
            while (static::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $counter;
                $counter++;
            }

            $model->slug = $slug;
        });
    }
}
