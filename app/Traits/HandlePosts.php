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

    public function deleteRequest(Request $request, $id)
    {
        // Retrieve the post by ID
        $post = UserMainPost::find($id);
    
        // Check if the post exists
        if (!$post) {
            return response()->json(['error' => 'Post not found.'], 404);
        }
    
        // Optionally add authorization checks here
        // if (auth()->user()->cant('delete', $post)) {
        //     return response()->json(['error' => 'Unauthorized'], 403);
        // }
    
        // Attempt to delete the post
        try {
            $post->delete();
            return response()->json(['success' => 'The post has been successfully deleted.'], 200);
        } catch (\Exception $e) {
            // Log the exception
            Log::error($e->getMessage());
    
            // If there is an error during deletion, return an error response
            return response()->json(['error' => 'An error occurred while deleting the post.'], 500);
        }
    }


    
    
}