<?php

namespace Rpsohag\LaravelDashboard\Http\Controllers\Backend;

use Illuminate\Routing\Controller as BaseController;

class ProfileController extends BaseController
{
    public function profile()
    {
        return view('LaravelDashboard::dashboard.pages.profile.index');
    }
}