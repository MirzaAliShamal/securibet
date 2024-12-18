<?php

namespace App\Http\Controllers\Admin;

use Hash;
use Auth;
use App\Models\User;
use App\Models\Setting;
use App\Models\MoneyBet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $moneybets = MoneyBet::where('status', 'active')->count();
        $users = User::where('role', 'user')->count();
        return view('admin.dashboard.dashboard', get_defined_vars());
    }

    public function setting(Request $req)
    {
        foreach ($req->except('_token') as $key => $value) {
            $setting = Setting::whereName($key)->first() ?? new Setting();
            if ($req->hasFile($key)) {
                $image_path =  $req->$key->store('cms', 'public');
                $setting->name = $key;
                $setting->value = $image_path;
                $setting->save();
            } else{
                $setting->name = $key;
                $setting->value = $value;
                $setting->save();
            }
        }
        $msg = 'Settings Updated Successfully';
        return redirect()->back()->with('success', $msg);
    }

    public function profile()
    {
        return view('admin.dashboard.profile', get_defined_vars());
    }

    public function generalUpdate(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'
        ]);
        
        $user = Auth::user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();
        
        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }

    public function passUpdate(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);
        
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();
        
        return redirect()->back()->with('success', 'Password Updated Successfully');
    }

    public function plan()
    {
        return view('admin.dashboard.plan', get_defined_vars());
    }
}
