<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\Translatable\HasTranslations;


class Category extends Model
{
    use SoftDeletes, HasFactory, HasTranslations, NodeTrait;

    public $translatable = ['title', 'description'];

    protected $fillable = [
        'title',
        'description',
        'slug',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'title' => 'array',
            'description' => 'array',
            'status' => 'boolean',
        ];
    }
}
