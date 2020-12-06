<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Year;


class yearController extends Controller
{
    //
    public function getYear($sector_id){
        $data = Year::where('sector_id',$sector_id)->get();

        return $data;
    }

    public function addYear(Request $Request){

        $year = Year::where('year', $Request->year)->where('sector_id', $Request->sector_id)
        ->first();
        if(!$year){
            $year = new Year;
            $year->year = $Request->year;
            $year->sector_id = $Request->sector_id;

            $year->save();

            return response()->json(['success' => true, 'message' => 'สร้างปีสำเร็จ']);
        } else {
            return response()->json(['success' => false, 'message' => 'ปีนี้ได้มีการใช้สร้างแล้ว', 'data' => $year->year]);
        }
    }

    public function checkYear(Request $Request){
        $year = Year::where('year', $Request->year)->where('sector_id', $Request->sector_id)->first();
        if(!$year){
            return response()->json(['success' => true, 'message' => 'ไม่พบปี']);

        } else {
            return response()->json(['success' => false, 'message' => 'ค้นหาปีสำเร็จ', 'data' => $year->year]);
        }
    }

    public function editYear(Request $Request)
    {
        $year = Year::where('year', $Request->year)->where('sector_id', $Request->sector_id)->first();


        if(!$year){
            $year = Year::find($Request->id);
            $year->year = $Request->year;

            $year->save();
            return response()->json(['success' => true, 'message' => 'แก้ไขสำเร็จ']);

        }
        else{
            return response()->json(['success' => false, 'message' => 'ปีนี้มีในระบบแล้ว', 'data' => $year->year]);
        }

    }


    public function removeYear($id){
        $year = Year::find($id);
        $year->delete();

    }
}
