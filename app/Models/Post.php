<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'price',
        'published',
        'category_id',
        'image_path', // Added image_path attribute for image storage
        'unit',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'published' => 'boolean',
    ];

    public static array $rules = [
        'title' => ['required', 'string', 'max:100'],
        'content' => ['nullable', 'string', 'max:10000'],
        'price' => ['required', 'string', 'max:10'],
        'published' => ['nullable', 'boolean'],
        'category_id' => ['nullable', 'integer'],
        'image_path' => ['nullable', 'string'], // Validation rule for image_path
    ];

    // Define relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getUnitAttribute($value)
    {
        if ($value === 'грн/шт') {
            return 'zł/шт';
        } elseif ($value === 'грн/кг') {
            return 'zł/кг';
        }
        return $value;
    }

    
    public function images()
    {
        return $this->hasMany(PostImage::class);
    }

    // Other methods like isPublished(), fillAttributes() can remain unchanged unless needed otherwise
}
