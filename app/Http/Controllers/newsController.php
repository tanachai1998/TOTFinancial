<?php

namespace App\Http\Controllers;
use App\Model\news;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Http\Request;

class newsController extends Controller
{
    //

    public function getNews($sector_id){
        $data = news::with('sector')->where('sector_id',$sector_id)->get();

        return $data;
    }


    public function getNewsInfo($news_id){
        $data = news::where('id',$news_id)->get();

        return $data;
    }


    public function addNews(Request $request){

        //$News = "news";
        $news = new news;
        $news->sector_id = $request->sector_id;
        $news->topic = $request->topic;
        $news->detail = $request->detail;
        $news->homeStatus = $request->status;;

        if($request->hasFile('image')){

        //     // $fileName = time().'.'.$request->file->extension();  
   
        //     // $request->file->move(public_path('uploadfiles'), $fileName);

        //     $fileName = str_random(10).'.'.$request->file('files')->getClientOriginalExtension();

        //     $request->file('files')->move(base_path().'/public/uploadfiles/',$fileName);
            
        //      $news->image = $fileName;
        // }else{
        //     $news->image = "bbb";
            $file = $request->file('image');
            $fileName = time().'.'.$file->extension();
            $path = ($file->getRealPath() != false) ? $file->getRealPath() : $file->getPathname();
            Storage::disk('images')->put($fileName, file_get_contents($path));

            $news->image = $fileName;
        }
 
        $news->save();

        return $news;

    }

    public function editNews(request $request){
        $news = news::find($request->id);

        $news->topic = $request->topic;
        $news->detail = $request->detail;

        $news->save();
    }

    public function removeNews($id){
        $news = news::find($id);
        File::delete('img/' . $news->image);
        $news-> delete();
    }
}
