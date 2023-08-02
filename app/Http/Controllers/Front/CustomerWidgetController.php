<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerWidgetController extends Controller
{
    public function settingsWidget(){
        return view('front.customer.settings.widget');
    }
}
