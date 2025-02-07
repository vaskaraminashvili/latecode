<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
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

    public function getRouteKeyName()
    {
        return 'slug'; // Use the 'slug' column for route binding
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    protected function casts(): array
    {
        return [
            'title'       => 'array',
            'description' => 'array',
            'code'        => 'array',
            'status'      => 'boolean',
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
