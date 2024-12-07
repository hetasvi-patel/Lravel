<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Employee;
use \App\Models\Myblog;

class MyController extends Controller
{
    public function Home()
    {
        $data  = Employee::get();
        return view('Others.Home',compact('data')); 
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
         $data = Myblog::get();
        // return view('Others.Create');
        return view('Others.ContactUs',compact('data'));
    }
    public function mypost()
    {
        return view('Others.Create');

    }
    public function store(Request $request)
    {
        $myblog = new Myblog();
        $myblog->title = $request->title;
        $myblog->subtitle = $request->subtitle;
        $myblog->body = $request->body;
        $myblog->save();
        echo "<script>
        alert('data inserted successfully...')</script>";
        return view('Others.Create');

    }
}
