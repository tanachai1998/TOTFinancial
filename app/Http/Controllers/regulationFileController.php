<?php

namespace App\Http\Controllers;

use App\Model\file;
use App\Model\RegulationFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Carbon\Carbon;
// use Illuminate\Http\File;
class regulationFileController extends Controller
{


    public function addFile(Request $Request)
    {
        $file = $Request->file('file');
        $uploadPath = "public/img";
    }


    public function storeFile(Request $request)
    {
        $date = Carbon::now();

        $files = new RegulationFile;
        $files->regulation_id = $request->regulation_id;
        $files->topic = $request->topic;
        $files->subTopic = $request->subTopic;

        $files->save();





        if ($request->hasFile('filename')) {
            $multi_file = $request->file('filename');
            foreach ($multi_file as $file) {

                $files->id;



                $filename = $file->getClientOriginalName();
                $newfilename = $date->format('Y-m-d') . '_' . $filename;
                Storage::putFileAs('Files', $file,  $newfilename);

                $file_table = new file;
                $file_table->regulation_file_id = $files->id;
                $file_table->file_name = $newfilename;
                $file_table->save();
            }
        }



    }
    public function getFile($regulation_id)
    {
        $data = RegulationFile::with('files')->where('regulation_id', $regulation_id)->get();

        return $data;
    }




    public function editFile(Request $request)
    {

        $date = Carbon::now();

        $file = RegulationFile::find($request->file_id);

        $file->regulation_id = $request->regulation_id;

        $file->topic = $request->topic;
        $file->subTopic = $request->subTopic;

        $file->save();


        if ($request->hasFile('filename')) {
            $multi_file = $request->file('filename');
            foreach ($multi_file as $file) {

                $filename = $file->getClientOriginalName();
                $newfilename = $date->format('Y-m-d') . '_' . $filename;
                Storage::putFileAs('Files', $file,  $newfilename);

                $file_table = new file;
                $file_table->regulation_file_id = $request->file_id;
                $file_table->file_name = $newfilename;
                $file_table->save();
            }
        }



    }

    public function deleteMultipleFiles(request $request){

    }

    public function removeFile($id)
    {

            $removeFile = RegulationFile::find($id);
            $removeFile->delete();


    }

    public function getFiles($id){
        $file = file::where('regulation_file_id',$id)->get();
        return $file;
    }
    public function removeFiles($id){
        $file = file::find($id);
        File::delete('Files/' . $file->file_name);
        $file->delete();
    }

}
