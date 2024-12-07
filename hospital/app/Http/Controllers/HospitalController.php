<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;


class HospitalController extends Controller
{
    
    public function index()
    {
        $patients = Hospital::get();
        return view('hospital.index',compact('patients'));
    }

     
    public function create()
    {
        return view('hospital.create');
    }

   
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'disease' => 'required',
            'medicines' => 'required',
        ]);
       Hospital::create($request->all());
       return redirect()->route('hospital.index');
    }

    
    public function show(Hospital $hospital)
    {
        return view('hospital.show',compact('hospital'));
    }

    public function edit(Hospital $hospital)
    {
        return view('hospital.edit', compact('hospital'));
    }

   
    public function update(Request $request, Hospital $hospital)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'disease' => 'required',
            'medicines' => 'required',
        ]);
        $hospital->update($request->all());
        return redirect()->route('hospital.index');
    }

    public function destroy(Hospital $hospital)
    {
        $hospital ->delete();
        return redirect()->route('hospital.index');
    }
}
