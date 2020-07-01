<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function selamat(Request $request)
    {

        return view('selamat');
    }

    public function selamat_post(Request $request)
    {
        $first = $request["Fisrtname"];
        $last = $request["Lastname"];
        return view('selamat', $first . $last);
    }
}
