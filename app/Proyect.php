<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    protected $keyType = 'string';
    protected $guarded = [];

    public function pictures()
    {
        $this->hasMany(Picture::class, 'proyect_id', "id");
    }
}
