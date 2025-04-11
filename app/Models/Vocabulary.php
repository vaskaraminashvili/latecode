<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Vocabulary extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    protected $translatable = [
        'title',
        'definition',
        'example',
        'notes',
    ];

    protected $fillable = [
        'term',
        'category',
        'title',
        'definition',
        'example',
        'notes',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'title'      => 'array',
            'definition' => 'array',
            'example'    => 'array',
            'notes'      => 'array',
            'status'     => 'boolean',
        ];
    }
}
