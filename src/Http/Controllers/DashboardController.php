<?php

namespace Rpsohag\LaravelDashboard\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('LaravelDashboard::dashboard.pages.dashboard.index');
    }
}