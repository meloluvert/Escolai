<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EscolaLoginController extends Controller 
{
    
    public function __construct()
    {
        $this->middleware('guest:escola')->except('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $status = Auth::guard('escola')->attempt($credentials, $request->remember);

        if ($status) {
            return redirect()->intended(route('home'));
        }

        return redirect()->intended(route('login'))->withInput($request->only('email', 'remember'));
    }

    public function index()
    {
        return view('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('auth.login');
    }
}
