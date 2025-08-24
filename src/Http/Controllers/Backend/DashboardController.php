<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.dashboard.index');
    }
}