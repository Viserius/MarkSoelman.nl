<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Show the index of our home
     */
    public function index()
    {
        return view('home.index');
    }
}
