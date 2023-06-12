<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function loginPost(Request $request) {
        $admin = Admin::where('email', $request->email)->first();

        if (!$admin)
            return redirect()->route('login_admin')->with('message', 'Email not found.')->withInput();

        if (Hash::check($request->password, $admin->password)) {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('admin_dashboard');
            }
        }

        return redirect()->route('login_admin')->with('message', 'Invalid Password.')->withInput();
    }
}
