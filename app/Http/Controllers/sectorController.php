<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Sector;

class sectorController extends Controller
{
    //
    public function getSector(){
        $data = Sector::all();

        return $data;
    }
}
