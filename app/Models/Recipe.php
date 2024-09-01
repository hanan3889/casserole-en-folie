<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [

        'created_at',
        'title',
        'description',
        'image_path',
        'preparation_time',
        'cooking_time',
        'servings',
        'categories_id',
        'users_id',
        'types_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredients')->withPivot('quantity', 'unity');
    }

    public function steps()
    {
        return $this->hasMany(Step::class);
    }
}
