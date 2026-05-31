<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();

        return view('teachers.list_teachers', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|max:255',
            'email'      => 'required|email',
            'phone'      => 'required',
            'speciality' => 'required'
        ]);

        Teacher::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'speciality' => $request->speciality,
        ]);

        return redirect('/teachers')
            ->with('success', 'Teacher added successfully');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'       => 'required|max:255',
            'email'      => 'required|email',
            'phone'      => 'required',
            'speciality' => 'required'
        ]);

        $teacher = Teacher::findOrFail($id);

        $teacher->update([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'speciality' => $request->speciality,
        ]);

        return redirect('/teachers')
            ->with('success', 'Teacher updated successfully');
    }

    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->delete();

        return redirect('/teachers')
            ->with('success', 'Teacher deleted successfully');
    }
}

