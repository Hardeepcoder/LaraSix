<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class adminController extends Controller
{
   public function addPost(Request $request){
       if($request->isMethod('post')){
        $title = $request->title;
        $content = $request->content;

        $add = DB::table('news')->insert([
            'title' => $title,
            'content' => $content,
            'logged_in_user' => Auth::User()->id
        ]);

        if($add){
            return "data saved successfully";
        }else{
            return "data not sent";
        }
       }
       else{
           return view('admin.addPost');
       }
      
   }
}
