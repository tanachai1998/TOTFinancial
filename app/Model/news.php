<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    //
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}
