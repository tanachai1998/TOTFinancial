<?php

namespace App\Http\Controllers;

use App\Model\categoryRegulation;
use App\Model\Regulation;
use App\Model\RegulationFile;
use App\Model\Year;
use App\Model\regulationType;

use Illuminate\Http\Request;

class regulationController extends Controller
{
    //
    public function getRegulationType($id, $sector_id)
    {
        $data = Regulation::with('Year')->where('category_regulation_id', $id)->where('sector_id', $sector_id)->get();

        return $data;
    }






    public function getRegulationFile($sector_id,$category_regulation_id, $regulation_type)
    {
        $data = Regulation::with('sector', 'regulationFile', 'Year')->where('category_regulation_id', $category_regulation_id)->where('sector_id', $sector_id)->where('type', $regulation_type)->get();
        return $data;
    }


    public function addRegulation(Request $Request)
    {

        $regulation = Regulation::with('sector', 'categoryRegulation','year')->where('type', '=', $Request->type)->where('sector_id', '=', $Request->sector_id)->where('year_id', '=', $Request->year)->where('category_regulation_id', '=', $Request->category_id)->first();

        if (!$regulation) {
            $regulation = new Regulation;
            $regulation->category_regulation_id = $Request->category_id;
            $regulation->type = $Request->type;
            $regulation->sector_id = $Request->sector_id;
            $regulation->year_id = $Request->year_id;

            $regulation->save();

            return response()->json(['success' => true, 'message' => 'สร้างประเภทสำเร็จ']);
        } else {
            return response()->json(['success' => false, 'message' => 'ชื่อประเภทนี้ได้มีการใช้สร้างแล้ว', 'data' => $regulation->type]);
        }
    }


    public function checkRegulation(Request $Request){
        $regulation = Regulation::with('sector', 'categoryRegulation','year')->where('type', '=', $Request->type)->where('sector_id', '=', $Request->sector_id)->where('year_id', '=', $Request->year_id)->where('category_regulation_id', '=', $Request->category_id)->first();
        if(!$regulation){
            return response()->json(['success' => true, 'message' => 'ไม่พบคำสั่งประเภทนี้']);

        }
        else {
            return response()->json(['success' => false, 'message' => 'พบคำสั่งประเภทนี้ในระบบ', 'data' => $regulation->type]);
        }

    }

    public function editRegulation(Request $Request)
    {
        $regulation = Regulation::find($Request->id);

        $regulation->type = $Request->type;
        $regulation->year_id = $Request->year_id;
        $regulation->category_regulation_id= $Request->category_regulation_id;
        $regulation->sector_id = $Request->sector_id;
        $regulation->save();
    }

    public function removeRegulation($id)
    {
        $regulation = Regulation::find($id);
        $regulation->delete();
    }
}
