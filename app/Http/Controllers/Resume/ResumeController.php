<?php

namespace App\Http\Controllers\Resume;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ResumeController extends Controller
{
    /**
     * Show the index of our home
     */
    public function index()
    {
        return view('resume.index');
    }
}
