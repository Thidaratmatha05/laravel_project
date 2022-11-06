<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['majors'] = Major::orderBy('id', 'asc')->paginate(5);
        return view('major.index', $data);
    }

   
    public function create()
    {
        return view('major.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'description' => 'required'
        ]);

        $major = new Major;
        $major->code = $request->code;
        $major->description = $request->description;
        $major->save();
        return redirect()->route('major.index')->with('success','Major has been inserted successfully.');
        //return view('major.index')->with('success','เพิ่มข้อมูลสำเร็จ');
    }


  
    public function show(Major $major)
    {
        return view('major.show', compact('major'));
    }

 
    public function edit(Major $major)
    {
        return view('major.edit', compact('major'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'description' => 'required'
        ]);

        $major = Major::find($id);
        $major->code = $request->code;
        $major->description = $request->description;
        $major->save();
        return redirect()->route('major.index')->with('success','Major has been updated successfully.');
    }


    public function destroy(Major $major)
    {
        $major->delete();
        return redirect()->route('major.index')->with('success', 'Major has been deleted successfully.');
    }
}
