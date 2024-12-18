<?php

namespace App\Http\Controllers;

use App\Models\MoneyBet;
use Stripe\StripeClient;
use App\Models\Bookmarker;
use App\Models\BettingTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('moneybet');
            }
        }
        return view('front.home', get_defined_vars());
    }

    public function checkout(Request $request)
    {
        $amount = setting($request->plan.'_plan_'.$request->type);

        return view('front.checkout', get_defined_vars());
    }

    public function moneybet()
    {
        $moneybets = MoneyBet::where('status', 'active')->orderBy('id', 'DESC')->get();
        $bookmarkers = Bookmarker::orderBy('id', 'DESC')->get();
        $bettingTools = BettingTool::orderBy('id', 'DESC')->get();
        return view('front.moneybet', get_defined_vars());
    }

    public function stripeInit(Request $req)
    {
        try {
            $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
            $intent = $stripe->setupIntents->create();

            return response()->json([
                'intent' => $intent,
            ], 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function webhook(Request $request)
    {
        \Log::info($request->all());
    }
}
