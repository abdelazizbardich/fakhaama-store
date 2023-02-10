<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;


class Product extends Model
{
    use HasFactory;


    /**
     * Get all of the reviews for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id', 'id');
    }

    /**
     * Get the category associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }


    protected $casts = [
        "dimentions" => "array",
        "gallery" => "array",
        "materials" => "array"
    ];


    protected static function boot()
    {
        parent::boot();

        // Order by name ASC
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('id', 'DESC');
        });
    }
}
