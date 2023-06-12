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
        return view('front.customer.messages.index');
    }

    public function messageLibrary(){
        return view('front.customer.messages.library');
    }

    public function messageSent(){
        return view('front.customer.messages.sent');
    }

    public function messageBookmarks(){
        return view('front.customer.messages.bookmarks');
    }
}
