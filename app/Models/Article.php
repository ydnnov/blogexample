<?php

namespace App\Models;

use App\Traits\HasUniqueSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    use HasUniqueSlug;

    protected $fillable = ['title', 'slug', 'content'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(ArticleComment::class);
    }

    public function getImageUrlAttribute()
    {
        // https://loremflickr.com/300/200
        return 'storage/img_0' . random_int(1, 2) . '_300_200.jpg';
    }
}
