<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::where('status', 1)->paginate(20);
        return view('admin.dashboard.customer.index', compact('customers'));
    }
}
