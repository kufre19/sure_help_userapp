<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use App\Models\UsersMainTestimonial;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $testimonials = UsersMainTestimonial::latest()->take(4)->get();
        return view("web.home", compact("testimonials"));
    }

    public function about()
    {
        return view("web.about");
    }

    public function contact()
    {
        return view("web.contact");
    }



    public function makeDonation(Request $request)
    {
        $url = "https://api.flutterwave.com/v3/payments";
        $secretKey = env('FLW_SECRETE');

        $trx_ref = Donations::generateUniqueTxRef();
        $amount = $request->input('amount');
        $email = $request->input('email');
        $phone = $request->input('phone') ?? "";
        $name = $request->input('name');




        $data = [
            'tx_ref' => $trx_ref,
            'amount' => $amount,
            'currency' => 'NGN',
            'redirect_url' => 'https://surehelp.org',
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
            $newDonation = new Donations([
                'tx_ref' => $trx_ref ,
                'amount' => $amount,
                'email' => $email,
                'phonenumber' => $phone,
                'name' => $name,
            ]);
            
            $newDonation->save();
            $jsonResponse = json_decode($response, true);
            return response()->json(["url"=>$jsonResponse['data']['link']]);
        }
    }
}
