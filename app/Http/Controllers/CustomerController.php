<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer()
    {
        return view('customer');
    }

    public function register(Request $request)
    {
        $request->validate
        (
            [
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                 'cpassword' => 'required|same:password'
            ]
        );
        echo "<pre>";
        print_r($request->all());
    }
}
