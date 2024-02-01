<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CustomLoginController extends LoginController
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->status == 0) {
                Auth::logout();
                return back()->withErrors(['error1' =>  'Your account is blocked by an admin.']);
            }
            if ($user->role == 0) {
                Auth::logout();
                return back()->withErrors(['error1' =>  'Access denied you are not a sub admin.']);
            }

            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'These credentials do not match our records.']);
    }
}

