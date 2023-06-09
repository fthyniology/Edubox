<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function aboutus()
    {
        return view('landing-page.aboutus');
    }
    public function faq()
    {
        return view('landing-page.FAQ');
    }
}
