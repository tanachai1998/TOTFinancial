<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}
