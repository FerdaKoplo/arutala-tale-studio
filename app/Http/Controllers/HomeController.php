<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Gambar;
use App\Models\Illustration;
use App\Models\Layouts;
use App\Models\OCDesign;
use App\Models\Team;
use App\Models\VtuberBuild;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $gambar =  Gambar::all();
        $team = Team::all();
        $video_url = VtuberBuild::all();
        $oc_design = OCDesign::all();
        // dd($banners);
        return view('welcome', compact('gambar', 'team', 'video_url', 'oc_design'));
    }
}
