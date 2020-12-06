<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShowStructurePage extends Model
{
    //

    public function sector()
    {
        return $this->belongsTo(Sector::class,'sector_id');
    }
}
