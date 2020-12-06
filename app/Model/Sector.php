<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    public function admins()
    {
        return $this->hasMany(admin::class);
    }

    public function categoryRegulations()
    {
        return $this->hasMany(categoryRegulation::class);
    }

    public function SectorImages()
    {
        return $this->hasMany(SectorImage::class);
    }

    public function regulations(){
        return $this->hasMany(Regulations::class);
    }

    public function newss(){
        return $this->hasMany(news::class);
    }

    
}
