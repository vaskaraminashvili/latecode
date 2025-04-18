<?php

namespace App\Models;

use App\Enums\DifficultyLevel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
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


    public function category()
    {
        return $this->belongsTo(Category::class);
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
                $words = preg_split('/\s+/u', strip_tags($this->description), -1, PREG_SPLIT_NO_EMPTY);
                $wordCount = count($words);
                return $wordCount;
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

    public function scopeFilter(Builder $query, $filter)
    {
        $query->when(!empty($filter['search_term']), function ($query) use ($filter) {
            $query->where('title', 'like', '%' . $filter['search_term'] . '%');
        });

        $query->when(!empty($filter['tags']), function (Builder $query) use ($filter) {
            return $query->whereHas('tags', function (Builder $query) use ($filter) {
                $query->whereIn('slug', $filter['tags']);
            });
        });

        $query->when(!empty($filter['parent_tags']), function (Builder $query) use ($filter) {
            return $query->whereHas('tags', function (Builder $query) use ($filter) {
                $query->whereIn('parent_id', $filter['parent_tags']);
            });
        });

        $query->when(!empty($filter['skill_level']), function (Builder $query) use ($filter) {
            $query->where('difficulty', $filter['skill_level']);
        });

        $query->when(!empty($filter['category']), function (Builder $query) use ($filter) {
            $query->whereHas('category', function ($q) use ($filter) {
                $q->where('title->en', 'like', '%' . $filter['category'] . '%');
            });
        });

        $query->when(!empty($filter['sort_by']), function ($query) use ($filter) {
            switch ($filter['sort_by']) {
                case 'latest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('created_at');
                    break;
                default:
                    break;
            }
        });

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
