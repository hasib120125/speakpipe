<?php

namespace App\Http\Controllers\Front;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signin(){
        return view('front.customer.auth.signin');
    }

    public function signinPost(Request $request){
        $messages = [
            'required' => 'This field is required.'
        ];

        $rules = [
            'email' => 'required|string|email',
            'password' => 'required'
        ];

        $request->validate($rules, $messages);

        $customer = Customer::where('email', $request->email)->first();

        if (!$customer){
            return redirect()->route('customer_signin')->with('message', 'Email not found.')->withInput();
        }

        if (Hash::check($request->password, $customer->password)) {
            if ($request->stay_signed_in){
                Auth::guard('customer')->login($customer,true);
            }else{
                Auth::guard('customer')->login($customer);
            }

            $customer->last_login = Carbon::now()->toDateTimeString();

            $customer->save();

            return redirect()->route('customer_messages');
        }

        return redirect()->route('customer_signin')->with('message', 'Invalid Password.')->withInput();
    }


    public function signup(){
        return view('front.customer.auth.signup');
    }

    public function signupPost(Request $request){
        $messages = [
            'required' => 'This field is required.'
        ];

        $rules = [
            'user_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:6'
        ];

        $request->validate($rules, $messages);

        $customer = Customer::create([
            'name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'account_id' => 'fdfdsfdf',
            'plan_id' => 1,
            'status' => 1,
            'receive_offers' => 1,
        ]);

        Auth::guard('customer')->login($customer);
        
        return redirect()->route('customer_help');
    }

    public function resetPassword(){
        return view('front.customer.auth.reset_password');
    }

    public function logout(){
        Auth::guard('customer')->logout();
        return redirect()->route('home');
    }
}
