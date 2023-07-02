<?php 


namespace App\Traits;

use App\Models\UsersMainPost;
use Illuminate\Support\Facades\Auth;

trait HandlePosts {
    public $loggedUser;
    
   
    public function listAllPosts()
    {
        $post_model = new UsersMainPost();
        $posts = $post_model->where('uuid',  Auth::user()->uuid)->get();
        if ($posts->isEmpty()) {
            // No posts for this user
            return false;
        } else {
            return $posts;
        }
    }

    public function CreatePost(){

    }
}