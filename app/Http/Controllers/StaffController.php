<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = staff::all();

        return view('showStaff', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addStaff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:5|max:20',
            'age' => 'required|before:20 years ago',
            'address' => 'required|min:10|max:40',
            // 'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:12',
            // 'number' => 'required|regex:/\+08\d{9}/',
            // 'number' => 'required|regex:/(\+62 ((\d{3}([ -]\d{3,})([- ]\d{4,})?)|(\d+)))|(\(\d+\) \d+)|\d{3}( \d+)+|(\d+[ -]\d+)|\d+/',
            'number' => [
            'required',
            'regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/'
            ],
        ]);

        staff::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'number' => $request->number,
            'position' => $request->position
        ]); 

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = staff::findOrFail($id);
        return view('editStaff', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:5|max:20',
            'age' => 'required|before:20 years ago',
            'address' => 'required|min:10|max:40',
            // 'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:12',
            // 'number' => 'required|regex:/\+08\d{9}/',
            // 'number' => 'required|regex:/\+08\d{9}/',
        ]);

        staff::findOrFail($id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'number' => $request->number,
            'position' => $request->position
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        staff::destroy($id);   
        return redirect('/');
    }
}
