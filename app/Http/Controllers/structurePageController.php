<?php

namespace App\Http\Controllers;
use App\Model\ShowStructurePage;
use App\Model\SectorImage;
use Illuminate\Support\Facades\Storage;
use File;

use Illuminate\Http\Request;

class structurePageController extends Controller
{
    //

    public function addStructureimg(Request $request){

        //$News = "news";
        $structureimg = new ShowStructurePage;
        $structureimg->sector_id = $request->sector_id;

        if($request->hasFile('imageFile')){

        //     // $fileName = time().'.'.$request->file->extension();  
   
        //     // $request->file->move(public_path('uploadfiles'), $fileName);

        //     $fileName = str_random(10).'.'.$request->file('files')->getClientOriginalExtension();

        //     $request->file('files')->move(base_path().'/public/uploadfiles/',$fileName);
            
        //      $news->image = $fileName;
        // }else{
        //     $news->image = "bbb";
            $file = $request->file('imageFile');
            $fileName = time().'.'.$file->extension();
            $path = ($file->getRealPath() != false) ? $file->getRealPath() : $file->getPathname();
            Storage::disk('images')->put($fileName, file_get_contents($path));

            $structureimg->imageFile = $fileName;
        }
 
        $structureimg->save();

        return $structureimg;

    }
    
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
    public function removeStructureImage($id){
        $structureimg = ShowStructurePage::find($id);
        File::delete('img/' . $structureimg->imageFile);
        $structureimg-> delete();
    }
}
