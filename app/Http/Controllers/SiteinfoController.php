<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE DB;
class SiteinfoController extends Controller
{
    public function createsiteinfo(Request $req){
        $user_id=$req->user_id;
        $url=$req->url;
        $email=$req->email;
        $pwd=$req->pwd;

        $result=DB::table('siteinfos')->where('user_id',$user_id)->where('url',$url)->get();
        
        if(count($result)==0){
            DB::table('siteinfos')->insert(array('user_id'=>$user_id,'url'=>$url,'email'=>$email,'password'=>$pwd));
           // return response()->json(['flag' => 'saved']);
           echo json_encode(array('flag'=>'saved'));
        }else{
            DB::table('siteinfos')
                ->where('user_id',$user_id)
                ->where('url',$url)
                ->update(['email'=>$email,'password'=>$pwd]);
            echo json_encode(array('flag'=>'updated'));
        }
        
    }
}
