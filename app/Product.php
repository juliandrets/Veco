<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $keyType = 'string';
    protected $guarded = [];

    public function picture()
    {
        return $this->hasOne(Picture::class, 'product_id', 'id');
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class, 'product_id', 'id')->oldest();
    }

    public function category()
    {
        return $this->hasOne(ProductCategory::class, 'id', 'category_id');
    }
}
