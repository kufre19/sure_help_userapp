<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Traits\HandlePosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    use HandlePosts;

    
    public function home()
    {
       
        $posts = $this->UserPosts();
        return view("user.dashboard.index",compact("posts"));
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
        $wishlist_model = new Wishlist();
        $wishes = $wishlist_model->where("user_id", Auth::user()->id)->with("wishedItem")->paginate();
        return view("user.dashboard.wish-list",compact("wishes"));
        
    }

    public function accountSettingsPage()
    {
        return view("user.dashboard.account_settings");
    }


    public function accountSettingsUpdate()
    {
        
    }

    
}
