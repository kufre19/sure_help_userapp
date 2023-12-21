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


    public function accountSettingsUpdate(Request $request)
    {
        // Validate the request
        $request->validate([
            'address' => 'string|max:255',
            'profile_photo' => 'sometimes|file|image|max:5000', // 5MB Max
        ]);
    
        info("seetings");

        try {
            // Get the authenticated user
            $user = Auth::user();
    
            // Update address and zip code
            $user->address = $request->address;
    
            // Check if a new profile photo is uploaded
            if ($request->hasFile('profile_photo')) {

                // Delete old photo if exists
                if ($user->profile_photo && Storage::exists($user->profile_photo)) {
                    Storage::delete($user->profile_photo);
                }
    
               // Store new photo
                $path = $request->file('profile_photo')->store('profile_photos', 'public');

                // Convert path to URL
                $url = url('/public/storage/' . $path);


                // Save URL to the user's profile photo field
                $user->profile_photo = $url;
            }
    
            // Save changes
            $user->save();
            info("saved");

    
            // Redirect with success message
            return redirect()->back()->with('success', 'Account settings updated successfully.');
    
        } catch (\Exception $e) {
            // Redirect with error message
            info($e);
            return redirect()->back()->with('error', 'An error occurred while updating account settings.');
        }
    }

    public function changeHelpOffer(Request $request)
    {
        // Validate the request, for example:
        $request->validate([
            'help_offering' => 'required|array',
            'help_offering.*' => 'string|in:Agricultural Help,Counseling Help,Clothing Help,Finacial Help,Medical Help,Food Items,Shelter',
        ]);
    
        $user = Auth::user();
    
        // Update user's help offerings
        // Assuming 'help_offering' is a JSON column or you have a method to handle the conversion
        $user->help_offering = json_encode($request->help_offering);
        
        $user->save();
    
        // Redirect back with success message
        return back()->with('success', 'Help offerings updated successfully.');
    }
    

    public function changePassword(Request $request)
    {
        // Validate the request
        $request->validate([
            'old-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);
    
        $user = Auth::user();
    
        // Check if the old password matches
        if (!Hash::check($request->input('old-password'), $user->password)) {
            return back()->with('error', 'The current password does not match.');
        }
    
        // Update the password
        $user->password = Hash::make($request->input('new-password'));
        $user->save();
    
        // Redirect back with success message
        return back()->with('success', 'Password changed successfully.');
    }
    
    
}
