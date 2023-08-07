<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerSubscriptionController extends Controller
{
    public function accountSubscription(){
        return view('front.customer.settings.subscription');
    }
}
