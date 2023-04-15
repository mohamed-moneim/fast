<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IMG;
use App\Models\PHOTO;
use App\Models\ARTICLE;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function addimg()
    {
        return view('addimg');
    }
    public function addimgform(Request $request)
    {
        $img = new IMG();
        $file = $request->file('img');
        $name = uniqid().$file->getClientOriginalName();
        $destinationPath = 'public/img';
        $file->move($destinationPath,$name);
        $img->name = $request->name;
        $img->img = $name;
        $img->save();
        return redirect('addimg');
    }
    public function addarticle()
    {
        return view('addarticle');
    }
    public function addarticleform(Request $request)
    {
        $img = new ARTICLE();
        $file = $request->file('img');
        $name = uniqid().$file->getClientOriginalName();
        $destinationPath = 'public/img';
        $file->move($destinationPath,$name);
        $img->title = $request->title;
        $img->author = $request->author;
        $img->body = $request->body;
        $img->metatitle = $request->metatitle;
        $img->date = $request->date;
        $img->metadesc = $request->metadesc;
        $img->img = $name;
        $img->save();
        return redirect('addarticle');
    }
    public function addvideo()
    {
        return view('addvideo');
    }
    public function addvideoform(Request $request)
    {
        $img = new PHOTO();
        $file = $request->file('img');
        $name = uniqid().$file->getClientOriginalName();
        $destinationPath = 'public/img';
        $file->move($destinationPath,$name);
        $img->title = $request->title;
        $img->author = $request->author;
        $img->body = $request->body;
        $img->metatitle = $request->metatitle;
        $img->date = $request->date;
        $img->metadesc = $request->metadesc;
        $img->img = $name;
        $img->save();
        return redirect('addarticle');
    }
    public function showimg(){
        $img = IMG::All();
        return view("showimg")->with("img",$img);
    }
    public function showarticles(){
        $img = ARTIClE::All();
        return view("showarticles")->with("img",$img);
    }
    public function showvideo(){
        $img = PHOTO::All();
        return view("showvideo")->with("img",$img);
    }
    public function deletevideo($id){
        $img = PHOTO::where("id",$id)->delete();
        return redirect("showvideo");
    }
    public function deletearticle($id){
        $img = ARTICLE::where("id",$id)->delete();
        return redirect("showarticles");
    }
    public function deleteimg($id){
        $img = IMG::where("id",$id)->delete();
        return redirect("showimg");
    }
}
