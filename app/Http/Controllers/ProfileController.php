<?php
/**
 * Created by PhpStorm.
 * User: This
 * Date: 1/7/2019
 * Time: 10:22 PM
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
//use http\Env\Request;
use Illuminate\Http\Request;
class ProfileController extends Controller{

    public function showPrifile(Request $request,$id){
        //echo  $request->method();
        //echo  $request->input("test");
//        if($request->is("admin/*")){
//            echo "FROM ADMIN";
//        }

        echo  $request->url();
      //  return "Hellow From ProfileCOntroler".$id;
    }
    public function profile(Request $request){
        return view("profile.profile",[
            'name'=>"Profile Page",
            'content' =>  "Profile Page Content"
        ]);
        
    }
}
