<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IMG;
use App\Models\ARTICLE;
use App\Models\PHOTO;
class front extends Controller
{
    public function img(){
        $img = IMG::all();
        return view("img")->with("img",$img);
    }
    public function blog(){
        $img = ARTICLE::all();
        return view("articles")->with("img",$img);
    }
    public function videos(){
        $img = PHOTO::all();
        return view("videos2")->with("img",$img);
    }
    
    public function singlearticle($id){
        $img = ARTICLE::where("id",$id)->get();
        return view("single-art")->with("img",$img);
    }
}
