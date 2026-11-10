<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {

        $images = Image::latest()->get();

        return view('home', compact('images'));
    }
}
