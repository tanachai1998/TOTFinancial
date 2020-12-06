<?php

namespace App\Http\Controllers;
use App\Model\SectorImage;


use Illuminate\Http\Request;

class sectorImageController extends Controller
{
    //
    public function getImageData(){
        $data = SectorImage::with('sector')->get();

        return $data;
    }

    public function removeImage($id){
        $data = SectorImage::find($id);
        $data->delete();
    }
}
