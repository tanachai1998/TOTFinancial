<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    //

    public function regulationFile()
    {
        return $this->belongsTo(RegulationFile::class);
    }

}
