<?php

namespace App\Http\Controllers;

use App\Models\PhishingLogs;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $logs = PhishingLogs::latest()->get();

        return view('dashboard', [
            'logs' => $logs,
        ]);
    }
}