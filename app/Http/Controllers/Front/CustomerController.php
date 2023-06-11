<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function help(){
        return view('front.customer.help');
    }

    public function messages(){
        return view('front.customer.messages');
    }
}
