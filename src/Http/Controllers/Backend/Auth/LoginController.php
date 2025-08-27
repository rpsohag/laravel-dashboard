<?php

namespace App\Http\Controllers\Backend\Auth;

use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function view()
    {
        return view('dashboard.auth.login');
    }
}