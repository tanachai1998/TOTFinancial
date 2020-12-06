<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    //


    public function Regulations()
    {
        return $this->hasMany(Regulation::class);
    }


}
