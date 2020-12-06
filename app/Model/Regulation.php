<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    //
    public function categoryRegulation()
    {
        return $this->belongsTo(categoryRegulation::class);
    }


    public function regulationFiles()
    {
        return $this->hasMany(RegulationFile::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function Year()
    {
        return $this->belongsTo(Year::class);
    }


}
