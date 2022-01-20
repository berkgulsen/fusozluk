<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 // Models
use App\Models\Entry;
use App\Models\Title;

class Homepage extends Controller
{
    public function __construct(){
        view()->share('titles',Title::orderBy('created_at','DESC')->get());
    }

    public function index(){
        return view('homepage');
    }

    public function entry($slug){
        $title=Title::whereSlug($slug)->first();
        $data['title']=$title;
        $data['entries']=Entry::where('title_id',$title->id)->orderBy('created_at','ASC')->paginate(5);
        return view('entry',$data);
    }

    public function myEntries(){
        $myEntries=Entry::Where('user_id',\Illuminate\Support\Facades\Auth::user()->id)->orderBy('created_at','DESC')->paginate(14);
        $data['myEntries']=$myEntries;
        return view('myEntries',$data);
    }
}
