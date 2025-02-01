<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Item extends Model
{
    use SoftDeletes, HasFactory, HasTranslations;

    protected $translatable = ['title', 'description'];

    protected $fillable = [
        'title',
        'slug',
        'description',
        'code',
        'status',
        'category_id',
    ];

    protected function casts(): array
    {
        return [
            'title'       => 'array',
            'description' => 'array',
            'code'        => 'array',
            'status'      => 'boolean',
        ];
    }
}
