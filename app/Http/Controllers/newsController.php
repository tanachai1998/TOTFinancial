<?php

namespace App\Http\Controllers;
use App\Model\news;
use Illuminate\Support\Facades\Storage;

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


        $News = "news";

        $news = new news;
        $news->sector_id = $request->sector_id;
        $news->topic = $request->topic;
        $news->detail = $request->detail;
        $news->homeStatus = $request->status;

        $file = $request->file('filename');
            Storage::disk('local')->put($News, $file);
        $news->save();


        return $request;

    }

    public function editNews(request $request){
        $news = news::find($request->id);

        $news->sector_id = $request->sector_id;

        $news->topic = $request->topic;
        $news->topic = $request->detail;

        $news->save();
    }
}
