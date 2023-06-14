<?php

namespace App\Http\Controllers;

use App\Traits\HandlePosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    use HandlePosts;

    
    public function home()
    {
       
        $posts = $this->listAllPosts();
        return view("user.dashboard.index",compact("posts"));
    }

    
}
