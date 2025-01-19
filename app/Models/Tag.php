<?php

namespace App\Models;

use App\Traits\HasUniqueSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    use HasUniqueSlug;

    protected static $titleColumn = 'label';

    protected $fillable = ['label', 'slug'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
