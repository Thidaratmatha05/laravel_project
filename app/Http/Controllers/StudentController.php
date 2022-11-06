<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; //Add this line too
use App\Models\Major;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //index
    public function index()
    {
      
        $data['students'] = Student::orderBy('id', 'asc')->paginate(3);
        return view('student.index', $data);
    }


     //create
    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'studentid' => 'required',
            'nickname' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'code_id' => 'required',
            'year' => 'required',
            
        ]);

        $student = new Student;
        $student->studentid = $request->studentid;
        $student->nickname = $request->nickname;
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->year = $request->year;
        $student->code_id = auth()->id();
        $student->save();
        return redirect()->route('student.index')->with('success', 'Create Successfully.');
    }

   
    public function show(Student $student)
    {
        
        return view('student.show', compact('student'));
    }

   
    public function edit(Student $student)
    {
        
        return view('student.edit', compact('student'));
    }

   

    public function update(Request $request, $id)
    {
        $request->validate([
            'studentid' => 'required',
            'nickname' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'code_id' => 'required',
            'year' => 'required',
            
        ]);

        $student = Student::find($id);
        $student->studentid = $request->studentid;
        $student->nickname = $request->nickname;
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->year = $request->year;
        $student->code_id = auth()->id();
        $student->save();
        return redirect()->route('student.index')->with('success', 'updated successfully.');
    }

    
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Student has been deleted successfully.');
    }
}
