<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Enumeration\BannerType;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function sectionOne(){
        $banner = Banner::where('type', BannerType::$SECTION_ONE_BANNER)->first();
        return view('admin.dashboard.banners.section_one', compact('banner'));
    }

    public function sectionOneSave(Request $request){
        dd($request->all());
    }

    public function sectionTwo(){
        return view('admin.dashboard.banners.section_two');
    }

    public function sectionTwoSave(Request $request){
        
    }

    public function sectionThree(){
        return view('admin.dashboard.banners.section_three');
    }

    public function sectionThreeSave(Request $request){

    }

    public function sectionFour(){
        return view('admin.dashboard.banners.section_four');
    }

    public function sectionFourSave(Request $request){

    }
}
