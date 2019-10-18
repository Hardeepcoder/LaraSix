<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\cats;
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
      
        $data = news::paginate(12);
        return response()->json($data);
       } 
}
