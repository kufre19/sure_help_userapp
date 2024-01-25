<?php

namespace App\Http\Controllers;

use App\Traits\HandlePosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\UsersSponsorsBroadcast;
use App\Models\UsersMainTestimonial;
use App\Models\UsersMainFeed;
use App\Models\UsersMainApp;
use App\Models\UserSponsorInbox;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\HelpOffered;
use App\Models\HelpPayment;
use App\Models\UsersMainPost;
use Illuminate\Support\Str;

class SponsorDashboardController extends Controller
{
    use HandlePosts;

    
    public function home()
    {
        $broadcasts = UsersSponsorsBroadcast::orderBy('date_created', 'desc')->first();
        $testimonials = UsersMainTestimonial::orderBy('created_at', 'desc')->take(5)->get();
        $newsItems = UsersMainFeed::orderBy('date_created', 'desc')->paginate(10);
    
        return view('user.sponsor_dashboard.index', compact('broadcasts', 'testimonials', 'newsItems'));
    }

    public function ViewPostUSer($id)
    {
        $user = UsersMainApp::where("uuid",$id)->first();
        return response()->json([
            'user'=>$user
        ]);

    }
    
    

  


    public function listMessages()
    {
        $inboxMessages = UserSponsorInbox::where('uuid', auth()->user()->uuid)
        ->orderBy('created_at', 'desc')
        ->paginate(10); // Adjust the pagination as per your need


        return view("user.sponsor_dashboard.inbox",compact('inboxMessages'));
    }

    public function getMessage($id)
    {
        $message = UserSponsorInbox::find($id);
        // Return the message content, for example, as JSON
        return response()->json(['message' => $message->message]);
    }

    public function getNews($id)
    {
        $news = UsersMainFeed::find($id);
        // Return the message content, for example, as JSON
        return response()->json(['news' => $news,"news_body"=>$news->news_body]);
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

    
            // Redirect with success message
            return redirect()->back()->with('success', 'Account settings updated successfully.');
    
        } catch (\Exception $e) {
            // Redirect with error message
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

    public function helpRequests()
    {
        $posts = $this->getAllApprovedPost();
        return view("user.sponsor_dashboard.help_request_posts",compact("posts"));
    }


    public function storeHelpOffer(Request $request)
    {
        // Validate the request data
        // Note: Adjust validation rules based on your requirements
        $validatedData = $request->validate([
            'post_id' => 'required|exists:users_main_posts,id',
            'helpTitle' => 'required|string|max:255',
            'helpDescription' => 'required|string',
            'helpType' => 'required|string',
            'uploadPdf' => 'required_if:helpType,upload_pdf|file|mimes:pdf',
            'recordedVideo' => 'required_if:helpType,record_video|file|mimes:mp4,mov,ogg,qt|max:20000',
            'recordedAudio' => 'required_if:helpType,record_audio|file|mimes:mp3,wav',
            'note' => 'required_if:helpType,write_note|string',
            'donationAmount' => 'required_if:helpType,send_money|numeric',
        ]);

        $userHelpPost = UsersMainPost::find($validatedData['post_id']);


        // Create a new HelpOffered record
        $helpOffered = HelpOffered::create([
            'uuid'=>  Str::random(6),
            'post_id' => $validatedData['post_id'],
            'help_title' => $validatedData['helpTitle'],
            'help_description' => $validatedData['helpDescription'],
            'help_category' => $userHelpPost->post_category,
            'help_item' => $validatedData['helpType'],
            'help_from'=> Auth::user()->uuid,
            'help_to'=> $userHelpPost->uuid


            // Map other fields from the form to the database columns
        ]);
        $helpPaymentLink = "";

        // Handle file upload and other specifics based on helpType
        switch ($validatedData['helpType']) {
            case 'upload_pdf':
                if ($request->hasFile('uploadPdf')) {
                    $path = $request->file('uploadPdf')->store('public/help_docs');
                    $helpOffered->help_item_url = Storage::url($path);
                }
                break;

            case 'record_video':
                if ($request->hasFile('recordedVideo')) {
                    $path = $request->file('recordedVideo')->store('public/help_videos');
                    $helpOffered->help_item_url = Storage::url($path);
                }
                break;

            case 'record_audio':
                if ($request->hasFile('recordedAudio')) {
                    $path = $request->file('recordedAudio')->store('public/help_audios');
                    $helpOffered->help_item_url = Storage::url($path);
                }
                break;

            case 'write_note':
                $helpOffered->message = $validatedData['note'];
                $helpOffered->help_item_url = "none";

                break;

            case 'send_money':
                $amount = $validatedData['donationAmount'];
                $help_offer_id = $helpOffered->id;
                $helpOffered->help_item_url = "none";
                $helpPaymentLink = $this->CreatePaymentLink($amount,$help_offer_id);
                break;
        }

        $helpOffered->save();

      
        return response()
        ->json(['msg'=>'Help offer has been sent.','helpPaymentLink'=>$helpPaymentLink]);
    }



    public function CreatePaymentLink($amount,$help_offer_id)
    {
        $url = "https://api.flutterwave.com/v3/payments";
        $secretKey = env('FLW_SECRETE');

        $email = Auth::user()->email;
        $phone =Auth::user()->phone ?? "";
        $name = Auth::user()->fullname;
        $trxRef = HelpPayment::generateUniqueTxRef(); 





        $data = [
            'tx_ref' => $trxRef,
            'amount' => $amount,
            'currency' => 'NGN',
            'redirect_url' => 'https://surehelp.org/sponsor/dashboard/help-requests',
            'meta'=>null,
            'customer' => [
                'email' => $email,
                'phonenumber' => $phone,
                'name' => $name,
            ]
           
        ];

        $headers = [
            'Authorization: Bearer ' . $secretKey,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $error = curl_error($ch);

        curl_close($ch);

        if ($error) {
            info($error);
            return response()->json(["status"=>'error']);

        } else {

             // Create a new HelpPayment record
             $helpPayment = HelpPayment::create([
                'help_offered_id' => $help_offer_id,
                'trx_ref' => $trxRef,
                'amount' => $amount,
                'status' => 'pending', // Default status
                ]);
    
           
            $jsonResponse = json_decode($response, true);
            return $jsonResponse['data']['link'];
        }
    }

    
    
}
