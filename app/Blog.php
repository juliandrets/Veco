<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $keyType = 'string';
    protected $guarded = [];

    public function pictures()
    {
        $this->hasMany(Picture::class, 'blog_id', "id");
    }
}
