<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function Home()
    {
        return view('Others.Home');
    }
    public function Index()
    {
        return view('Template.Index');
    }
    public function AboutUs()
    {
        return view('Others.AboutUs');
    }
    public function ContactUs()
    {
        return view('Others.ContactUs');
    }
}
