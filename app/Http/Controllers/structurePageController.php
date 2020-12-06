<?php

namespace App\Http\Controllers;
use App\Model\ShowStructurePage;
use App\Model\SectorImage;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class structurePageController extends Controller
{
    //
    public function getStructureImage($sector_id){
        $image = ShowStructurePage::with('sector')->where('sector_id',$sector_id)->get();

        return $image;
    }

    public function editStructureImage(Request $request){

        $image = ShowStructurePage::find($request->id);



        $inputFile = $request->file('filename');
        if ($request->hasFile('filename')) {



               Storage::disk('local')->put('structureImage',$inputFile);

                $image->imageFile = $inputFile;

               $image->save();

        }






    }

    public function getSectorImage($sector_id){
        $image = SectorImage::with('sector')->where('sector_id',$sector_id)->get();

        return $image;
    }

    public function editSectorImage(Request $request){
        $image = SectorImage::find($request->id);



        $inputFile = $request->file('filename');
        if ($request->hasFile('filename')) {

               Storage::disk('local')->put('structureImage',$inputFile);

                $image->imageFile = $inputFile;

               $image->save();

        }

    }
}
