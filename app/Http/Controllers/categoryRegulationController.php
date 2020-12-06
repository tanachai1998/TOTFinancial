<?php

namespace App\Http\Controllers;


use App\Model\categoryRegulation;
use Illuminate\Http\Request;

class categoryRegulationController extends Controller
{
    //

    public function getCategory($id)
    {
        $data = categoryRegulation::where('sector_id', $id)->get();

        return $data;
    }
    public function addCategory(Request $Request)
    {

        $category = categoryRegulation::with('sector')->where('type', '=', $Request->type)->where('sector_id',$Request->sector_id)->first();

        if (!$category) {
            $category = new categoryRegulation;
            $category->type = $Request->type;
            $category->sector_id = $Request->sector_id;

            $category->save();

            return response()->json(['success' => true, 'message' => 'สร้างหมวดหมู่สำเร็จ']);
        } else {
            return response()->json(['success' => false, 'message' => 'ชื่อหมวดหมู่นี้ได้มีการใช้สร้างแล้ว', 'data' => $category->type]);
        }


    }

    public function checkCategory(Request $Request){
        $category = categoryRegulation::with('sector')->where('type', '=', $Request->type)->where('sector_id',$Request->sector_id)->first();
        if(!$category){
            return response()->json(['success' => true, 'message' => 'ไม่พบหมวดหมู่']);

        } else {
            return response()->json(['success' => false, 'message' => 'ค้นหาหมวดหมู่สำเร็จ', 'data' => $category->type]);
        }
    }

    public function updateCategory(Request $Request)
    {

        $category = categoryRegulation::find($Request->id);
        $category->type = $Request->type;

        $category->save();
    }

    public function removeCategory($id)
    {
        $category = categoryRegulation::find($id);
        $category->delete();
    }
}
