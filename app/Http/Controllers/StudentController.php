<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
   public function index()
{
    $students = Student::all();

    return view('students.list_students', compact('students'));
}

    public function create()
    {
    return view('students.create');
    }

    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'section' => $request->section,
        ]);

        return redirect('/students');
    }

//     public function show(string $id)
//     {
//         //
//     }

    public function edit(string $id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'section' => $request->section,
        ]);

        return redirect('/students')
            ->with('success', 'Student updated successfully');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return redirect('/students')
            ->with('success', 'Student delete successfully');
    }


}
