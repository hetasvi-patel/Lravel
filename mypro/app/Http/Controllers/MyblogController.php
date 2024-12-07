<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myblog;

class MyblogController extends Controller
{
    public function index()
    {
        $data = Myblog::get();
        return view('user.index', compact('data'));
    }
    public function contactUs()
    {
        return view('user.contactus');
    }
    public function aboutUs()
    {
        return view('user.aboutus');
    }
    public function create()
    {
        return view('user.create');
    }

    public function destroy($id)
    {
        $data = Myblog::find($id);
        $data->delete();
        return redirect()->route('myblog.index');
    }
    //edit
    public function edit($id)
    {
        $data = Myblog::find($id);
        return view('user.edit', compact('data'));
        
    }

    function show($id){
        $comment = Myblog::get();
        $data = Myblog::find($id);
        return view('user.show' , compact('data','comment'));
    }
    public function update(Request $request, $id)
    {
        $myblog = Myblog::find($id);
        $myblog->title = $request->title;
        $myblog->subtitle = $request->subtitle;
        $myblog->body = $request->body;
        $myblog->save();
        echo "<script>
        alert('data updateed successfully...')</script>";
        return redirect()->route('myblog.index');
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
        return redirect()->route('myblog.index');
    }
    
}
