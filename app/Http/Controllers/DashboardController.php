<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $this->authorize('is_admin');
        return view('dashboard.index');
    }
}
