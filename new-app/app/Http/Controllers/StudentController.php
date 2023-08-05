<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function create()
    {
        $tracks = Track::all();
        return view('students.create', compact('tracks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'IDnum' => 'required',
            'track_id' => [
                'required',
                Rule::exists('tracks', 'id')
            ],
        ]);
        $student = new Student();
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->IDnum = $request->input('IDnum');
        $student->track_id = $request->input('track_id');
        $student->save();
        return redirect()->route('students.index');
    }

    public function index()
    {
        $students = Student::with('track')->get();
        return view('students.index', compact('students'));
    }

    public function edit(Student $student)
    {
    $tracks = Track::all();
    return view('students.edit', compact('student', 'tracks'));
    }

    public function update(Request $request, Student $student)
    {
        if ($request->user()->cannot('update', $student)) {
            abort(403);
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'IDnum' => 'required',
            'track_id' => [
                'required',
                Rule::exists('tracks', 'id')
            ],
    ]);
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->IDnum = $request->input('IDnum');
        $student->track_id = $request->input('track_id');
        $student->save();
        return redirect()->route('students.index');}
}

public function destroy(Student $student)
{
    $student->delete();
    return redirect()->route('students.index');
}

}
