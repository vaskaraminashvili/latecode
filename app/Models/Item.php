<?php

namespace App\Models;

use App\Enums\DifficultyLevel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use LakM\Comments\Concerns\Commentable;
use LakM\Comments\Contracts\CommentableContract;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Item extends Model implements CommentableContract
{
    use SoftDeletes, HasFactory, HasTranslations, HasSlug, Commentable;

    public $guestMode = false; // Auth mode
    public $commentLimit = 10;
    protected $translatable = ['title', 'description'];
    protected $fillable = [
        'title',
        'slug',
        'description',
        'code',
        'status',
        'category_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug'; // Use the 'slug' column for route binding
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function wordCount(): Attribute
    {
        return Attribute::make(
            get: function () {
                return Str::of($this->description)->wordCount();
            }
        );
    }

    public function readingTime(): Attribute
    {
        $wordsPerMinute = 200;
        return Attribute::make(
            get: function () use ($wordsPerMinute) {
                return ceil($this->wordCount / $wordsPerMinute);
            }
        );
    }

    public function scopeFilter(Builder $query, Request $request)
    {
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->input('search') . '%');
        }

        if ($request->has('tag')) {
            $query->whereHas('tags', function ($query) use ($request) {
                $query->where('slug', $request->input('tag'));
            });
        }

        if ($request->has('sortBy')) {
            switch ($request->input('sortBy')) {
                case 'latest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('created_at', 'asc');
                    break;
                case 'name_asc':
                    $query->orderBy('name', 'asc');
                    break;
                case 'name_desc':
                    $query->orderBy('name', 'desc');
                    break;
                default:
                    break;
            }
        }

        return $query;
    }

    protected function casts(): array
    {
        return [
            'title'       => 'array',
            'description' => 'array',
            'code'        => 'array',
            'status'      => 'boolean',
            'difficulty'  => DifficultyLevel::class,
        ];
    }

    protected function descriptionCode(): Attribute
    {
        $description = $this->description;
        $desc_arr = explode('@@code@@', $description);
        $desc_code = [];
        foreach ($desc_arr as $key => $desc_part) {
            $code = '';
            if (isset($this->code[$key])) {
                $lang = Str::lower($this->code[$key]['language']);
                $code = "```{$lang} \n";
                $code .= $this->code[$key]['content'];
                $description = preg_replace('/@@code@@/', $code, $description, 1);
            }
            $desc_code[] = [
                'desc' => $desc_part,
                'code' => $code,
            ];
        }

        return Attribute::make(
            get: function () use ($desc_code) {
                return $desc_code;
            }
        );
    }

}
