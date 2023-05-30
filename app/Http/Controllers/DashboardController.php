<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home()
    {
        // dd(Auth::user());
        // dd(Auth::user()->profile_photo);

        return view("user.dashboard.index");
    }
}
