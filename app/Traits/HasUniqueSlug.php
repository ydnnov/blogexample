<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @mixin Model
 */
trait HasUniqueSlug
{
    public static function bootHasUniqueSlug()
    {
        static::creating(function ($model) {
            $titleColumn = static::$titleColumn ?? 'title';
            $slugColumn = static::$slugColumn ?? 'slug';

            if (empty($model[$slugColumn])) {
                $nextId = (static::orderByDesc('id')->value('id') ?: 0) + 1;
                $model[$slugColumn] = $nextId . '-' . Str::slug($model[$titleColumn]);
            }
        });
    }
}
