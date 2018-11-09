<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $keyType = 'string';
    protected $guarded = [];

    public function pictures()
    {
        return $this->hasMany(Picture::class, 'project_id', "id");
    }
    public function firstPicture()
    {
        return $this->hasMany(Picture::class, 'project_id', "id")->take(1);
    }
}
