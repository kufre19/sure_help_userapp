<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Traits\HandlePosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Models\UserMainPost;
use App\Models\UsersMainPost;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    use HandlePosts;


    public function home()
    {

        $posts = $this->UserPosts();
        return view("user.dashboard.index", compact("posts"));
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

    public function readMessage($id = null)
    {
        return view("user.dashboard.view_message");
    }

    public function UserWishList()
    {
        $wishlist_model = new Wishlist();
        $wishes = $wishlist_model->where("user_id", Auth::user()->id)->with("wishedItem")->paginate();
        return view("user.dashboard.wish-list", compact("wishes"));
    }

    public function accountSettingsPage()
    {
        return view("user.dashboard.account_settings");
    }


    public function accountSettingsUpdate()
    {
    }



    public function createRequest(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:500',
            'category' => 'required|max:20',
            'help_video' => 'required|file|mimes:mp4', // Make sure the validation rules fit your needs
        ]);

        // Handle file upload
        if ($request->hasFile('help_video')) {
            $video = $request->file('help_video');
            $videoName = time() . '_' . $video->getClientOriginalName();

            // Target directory outside of Laravel app directory
            $targetDir = $_SERVER['DOCUMENT_ROOT'] . '/development/main/video_posts/';
            $video->move($targetDir, $videoName);
            $videoPath = "https://development.surehelp.org/main/video_posts/" . $videoName;
        }

        // Create a new UserMainPost instance
        $post = new UsersMainPost();
        $post->uuid = auth()->user()->uuid; // Assuming 'uuid' is a field in your users table
        $post->post_uuid = Str::uuid(); // Generate a UUID for the post
        $post->post_title = $request->title;
        $post->post_description = $request->description;
        $post->post_category = $request->category;
        $post->post_video = $videoPath ?? null; // Assign video path if upload was successful
        $post->post_status = 'pending';

        // Save the post
        $post->save();

        // Redirect or return response
        return redirect()->back()->with('success', 'Your request has been created.');
    }


    public function deleteRequest(Request $request, $id)
    {
        // Retrieve the post by ID
        $post = UsersMainPost::find($id);

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
