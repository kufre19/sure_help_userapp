<?php

namespace App\Http\Controllers;

use App\Models\UsersMainTestimonial;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $testimonials = UsersMainTestimonial::latest()->take(4)->get();
        return view("web.home",compact("testimonials"));
    }

    public function about()
    {
        return view("web.about");
    }

    public function contact()
    {
        return view("web.contact");
    }
}

