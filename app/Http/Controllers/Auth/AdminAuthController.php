<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AdminAuthController extends Controller
{
    public function __construct()
    {
        Auth::setDefaultDriver('admin');
        config(['auth.defaults.passwords' => 'admins']);
    }

    public function login()
    {
        return Inertia::render('Auth/Login');
    }

    public function logoutAdmin(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|min:8|max:30'
        ]);

        if (
            Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])
        ) {
            return response()->json([
                'auth' => 'success'
            ]);
        }

        return response()->json([
            'message' => 'Login or password entered incorrectly'
        ], 403);
    }
}
