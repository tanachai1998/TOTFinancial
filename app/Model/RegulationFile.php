<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RegulationFile extends Model
{
    //

    public function Regulation()
    {
        return $this->belongsTo(Regulation::class);
    }

    public function files()
    {
        return $this->hasMany(file::class);
    }

}
