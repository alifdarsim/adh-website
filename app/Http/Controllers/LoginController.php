<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
   public function showLoginForm()
   {
    return view('auth.login');
   }

   public function login(Request $request)
    {
        $password = '12345678'; 
        if (!Hash::check($request->password, Hash::make($password))) {
            return redirect()->back()->with('error', 'Invalid password');
        }
        // Password is correct, set session variable to indicate login status
        $request->session()->put('cms_logged_in', true);

        return redirect()->route('cms.blogs.index');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('cms.login'); 
    }
}
