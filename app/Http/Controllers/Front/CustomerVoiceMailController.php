<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerVoiceMailController extends Controller
{
    public function settingsVoiceMail(){
        return view('front.customer.settings.voice_mail');
    }
}
