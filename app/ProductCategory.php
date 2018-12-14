<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $keyType = 'string';
    protected $guarded = [];
    protected $table = "products_categories";

    public function picture()
    {
        return $this->hasOne(Picture::class, 'product_category_id', 'id')->select(['id', 'picture']);
    }
}
