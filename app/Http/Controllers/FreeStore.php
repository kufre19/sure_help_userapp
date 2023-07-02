<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeStore extends Controller
{
    public function index()
    {
        return view("store.store-index");
    }
}
