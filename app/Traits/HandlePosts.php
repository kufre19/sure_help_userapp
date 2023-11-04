<?php 


namespace App\Traits;

use App\Models\UsersMainPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserMainPost;
use Illuminate\Support\Facades\Log;

trait HandlePosts {
    public $loggedUser;
    
   
    public function UserPosts()
    {
        $post_model = new UsersMainPost();
        $posts = $post_model->where('uuid',  Auth::user()->uuid)->paginate(6);
        if ($posts->isEmpty()) {
            // No posts for this user
            return false;
        } else {
            return $posts;
        }
    }

    public function getAllApprovedPost()
    {
        $post_model = new UsersMainPost();
        $posts = $post_model->where('post_status',  "approved")->paginate();
        if ($posts->isEmpty()) {
            // No posts for this user
            return false;
        } else {
            return $posts;
        }
    }

   


    
    
}