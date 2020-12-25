<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\admin;
use Illuminate\Support\Facades\Hash;


class adminController extends Controller
{
    public function index()
    {
        $data = admin::with('sector')->get();

        return $data;
    }

    public function addUsers(Request $Request)
    {

        $myUser = admin::with('sector')->where('email', '=', $Request->email)->first();

        if(!$myUser){
            $myUser = new admin;
            $myUser->name = $Request->name;
            $myUser->surName = $Request->surname;
            $myUser->email = $Request->email;
            $myUser->password = Hash::make($Request->password);
            $myUser->sector_id = $Request->sector_id;
            $myUser->uid = $Request->uid;

            $myUser->save();

           return response()->json(['success'=>true, 'message' => 'ลงทะเบียนสำเร็จ']);


        }else{
           return response()->json(['success'=>false, 'message' => 'อีเมล์นี้ได้มีการถูกใช้ในการลงทะเบียนแล้ว', 'data'=> $myUser->email]);
                // return ;
        }


        // return $Request->sector_id;
    }
    public function searchUser(Request $Request)
    {
        $user = admin::where('email', $Request->email)->first();

        if(!$user){
            return response()->json(['status'=>true]);
        }else{
            return response()->json(['status'=>false]);

        }
    }
    public function queryUser(Request $Request)
    {
        $user = admin::with('sector')->where('email', '=', $Request->email)->first();
        if (!$user) {
           return response()->json(['success'=>false, 'message' => 'Login Fail, please check email id']);
        }
        if (!Hash::check($Request->password, $user->password)) {
           return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
        }

        return response()->json(['success'=>true,'message'=>'success', 'data' => $user]);

    }
    public function getUsers($id){
        $adminUser = admin::with('sector')->where('id',$id)->first();

        return response()->json($adminUser);
    }

    public function getUserByUid($uid){
        $uid = admin::with('sector')->where('uid',$uid)->first();

        return $uid;
    }
    public function postemailtoget(Request $request){
        //return "123";
        //return $request->email;

        $user = admin::where('email',$request->email)->first();
        
        return $user;
    }

}
