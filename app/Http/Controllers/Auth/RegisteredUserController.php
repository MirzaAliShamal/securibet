<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Stripe\StripeClient;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        DB::beginTransaction();
        try {
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->surname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user',
            ]);

            event(new Registered($user));

            Auth::login($user);

            $amount = setting($request->plan.'_plan_'.$request->type);
            $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
            $charge = $stripe->paymentIntents->create([
                'amount' => $amount * 100,
                'currency' => 'eur',
                'payment_method' => $request->setup_intent,
                'confirmation_method' => 'manual',
                'confirm' => true,
                'return_url' => route('home'),
            ]);
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Registered',
                'charge' => $charge
            ], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e->getMessage(), 500);
        }
    }
}
