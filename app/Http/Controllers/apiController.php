<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\cats;
use App\User;
use Auth;
class apiController extends Controller
{
    public function news(Request $request){
        if(!empty($request->keywords)){
            return news::where('title', 'like', '%' .$request->keywords . '%')->get();
        }
        return news::all();
        
    }
    public function cats(){
        return cats::all();
    }

    public function allposts(Request $request){
        if(!empty($request->cat)){
            $data = news::whereIn('cat_id',$request->cat)->paginate(12);
            return response()->json($data);
        }
        $data = news::paginate(12);
        return response()->json($data);
    }
    

   public function login(Request $request){
       $loginDetails = $request->only('email','password');

       if(Auth::attempt($loginDetails)){
           return response()->json(['message' => 'login successful', 'code' => 200]);
       }else{
           return response()->json(['message' => 'wrong login details', 'code' => 501]);
       }
   }



}
