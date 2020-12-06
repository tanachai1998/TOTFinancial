<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SectorImage extends Model
{
    //
    public function sector(){
        return $this->belongsTo(Sector::class,'sector_id');
    }
}
