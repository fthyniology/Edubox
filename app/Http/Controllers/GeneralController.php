<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class GeneralController extends Controller
{
    /**
     * Display the welcome page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('welcome');
    }

    /**
     * Display the about us page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function aboutus(): View
    {
        return view('landing-page.aboutus');
    }

    /**
     * Display the frequently asked questions (FAQ) page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function faq(): View
    {
        return view('landing-page.FAQ');
    }
}
