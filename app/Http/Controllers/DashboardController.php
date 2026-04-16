<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'temperature' => 4,
            'humidity' => 70,
            'freshness' => 85,
            'status' => 'Fresh',
            'cold_chain' => 'Respectée'
        ];

        return view('dashboard', compact('data'));
    }
}
