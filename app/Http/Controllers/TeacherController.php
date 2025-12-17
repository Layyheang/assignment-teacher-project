<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::orderBy('tid', 'asc')->get();
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'gender' => 'required',
            'degree' => 'required',
            'tel' => 'required'
        ]);

        Teacher::create($request->all());
        return redirect()->route('teachers.index');
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.show', compact('teacher'));
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::where('tid', $id)->firstOrFail();

        $teacher->update([
            'full_name' => $request->full_name,
            'gender'    => $request->gender,
            'degree'    => $request->degree,
            'tel'       => $request->tel,
        ]);

        return redirect()->route('teachers.index');
    }

    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect()->route('teachers.index');
    }
}
