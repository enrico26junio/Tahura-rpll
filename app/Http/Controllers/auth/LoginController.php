<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/menu-makanan'); // Redirect to "Menu Makanan"
    }

    return back()->withErrors([
        'username' => 'The provided credentials do not match our records.',
    ]);
}


    public function forgotPassword()
    {
        return view('auth.passwords.email');
    }

    public function scanQr(Request $request)
    {
        $data = $request->query('data'); // Data from the QR code

        // Example: Assume the QR code contains a username or token
        $user = User::where('username', $data)->first();

        if ($user) {
            Auth::login($user); // Log the user in
            return redirect('/dashboard')->with('success', 'Logged in successfully via QR Code.');
        }

        return redirect('/login')->withErrors(['qr' => 'Invalid QR Code. Please try again.']);
    }
}

