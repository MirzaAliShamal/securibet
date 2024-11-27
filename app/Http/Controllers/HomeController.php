<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.home', get_defined_vars());
    }

    public function checkout()
    {
        return view('front.checkout', get_defined_vars());
    }

    public function moneybet()
    {
        return view('front.moneybet', get_defined_vars());
    }

    public function webhook(Request $request)
    {
        \Log::info($request->all());
    }
}
