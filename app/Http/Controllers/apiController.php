<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\cats;
class apiController extends Controller
{
    public function news(){
        return news::all();
    }
    public function cats(){
        return cats::all();
    }
}
