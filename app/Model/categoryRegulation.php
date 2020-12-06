<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class categoryRegulation extends Model
{
    //

    public function regulations()
    {
        return $this->hasMany(Regulation::class);
    }
    public function sector(){
        return $this->belongsTo(Sector::class);
    }
}
