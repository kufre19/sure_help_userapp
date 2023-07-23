<?php

namespace App\Http\Controllers;

use App\Traits\HandlePosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class SponsorDashboardController extends Controller
{
    use HandlePosts;

    
    public function home()
    {
       
        $posts = $this->getAllApprovedPost();
        return view("user.sponsor_dashboard.index",compact("posts"));
    }

    // page to create new request
    public function newRequestPage()
    {
        return view("user.dashboard.create_new_request");
    }


    public function listMessages()
    {
        return view("user.dashboard.inbox");
    }

    public function readMessage($id=null)
    {
        return view("user.dashboard.view_message");
    }

    public function UserWishList()
    {
        return view("user.dashboard.wish-list");
        
    }

    public function accountSettingsPage()
    {
        return view("user.sponsor_dashboard.account_settings");
    }


    public function accountSettingsUpdate()
    {
        
    }

    
}
