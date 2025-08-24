<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('dashboard.pages.profile.index');
    }
}