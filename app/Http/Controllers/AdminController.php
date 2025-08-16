<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Portfolio;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $admin = Auth::guard('admin')->user();
            if (!$admin->isActive()) {
                Auth::guard('admin')->logout();
                return back()->withErrors(['username' => 'Akun admin tidak aktif.']);
            }

            $admin->updateLastLogin();
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->onlyInput('username');
    }

    public function dashboard()
    {
        $totalPortfolios = Portfolio::count();
        $featuredPortfolios = Portfolio::featured()->count();
        $recentPortfolios = Portfolio::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalPortfolios', 'featuredPortfolios', 'recentPortfolios'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
