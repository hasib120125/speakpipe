<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::guard('customer')->user()){
            return redirect()->route('customer_messages');
        }else{
            return view('front.pages.home');
        }
    }

    public function faq(){
        return view('front.pages.faq');
    }
}
