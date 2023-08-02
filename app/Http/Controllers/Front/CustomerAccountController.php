<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerAccountController extends Controller
{
    public function accountSettings(){
        return view('front.customer.settings.account');
    }
}
