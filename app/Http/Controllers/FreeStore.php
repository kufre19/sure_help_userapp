<?php

namespace App\Http\Controllers;

use App\Models\FreeShop;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FreeStore extends Controller
{
    public function index()
    {
        $free_shop_model = new FreeShop();
        $items = $free_shop_model->where('item_status', 'active')->paginate(15);
        return view("web.free-store", compact("items"));
    }


    public function wishlist_add($id)
    {
        if (FreeShop::find($id) == null) {
            return redirect()->back();
        }

        $wishlist_model = new Wishlist();
        $user_id = Auth::user()->id;
        $wish = $wishlist_model->where("item_id", $id)->where("user_id", $user_id)->first();

        if ($wish) {
            return response()->json(['status' => 'warning','message' => "Item Added Already!"]);
        }

        $wishlist_model->user_id = $user_id;
        $wishlist_model->item_id = $id;
        $wishlist_model->wish_status = "pending";
        $wishlist_model->save();
        return response()->json(['status' => 'success', 'message' => "Item added to your wish list!"]);
    }

    public function wishlist_remove($id)
    {
        $wishlist_model = new Wishlist();
        $wish = Wishlist::find($id);
        if (!$wish) {
            return response()->json(["warning","Item not found!"]);
        } else {
            $wish->delete();
            return response()->json(['status' => 'success','message' => "Item has been removed from wishlist!"]);
        }
    }
}
