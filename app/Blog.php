<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $keyType = 'string';
    protected $guarded = [];

    public function pictures()
    {
        return $this->hasMany(Picture::class, 'blog_id', "id");
    }
    public function firstPicture()
    {
        return $this->hasMany(Picture::class, 'blog_id', "id")->take(1);
    }
}
