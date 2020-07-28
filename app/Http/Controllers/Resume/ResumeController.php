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

    /**
     * Show the resume in Dutch
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexnl()
    {
        return view('resume.indexnl');
    }

    /**
     * Show the (motivational) letter
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexLetter()
    {
        return view('resume.letter');
    }
}
