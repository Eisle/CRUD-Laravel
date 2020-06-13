<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Must login before
    public function __construct()
    {
        $this->middleware('auth');
    }

    // read
    public function index()
    {
        $student = \App\Student::paginate(5);

        // option select
        $selectRayon = \App\Rayon::distinct()->pluck('rayon')->sort();
        $selectRombel = \App\Rombel::distinct()->pluck('rombel')->sort();

        return view('student.dataStudent', compact('student', 'selectRayon', 'selectRombel'));
    }

    // insert
    public function add(Request $request)
    {
        \App\Student::create($request->all());

        return redirect('/student')->with('sukses', 'Data berhasil diinput');
    }

    // edit && update
    public function edit($id)
    {
        $student = \App\Student::find($id);

        // option select
        $selectRayon = \App\Rayon::distinct()->pluck('rayon')->sort();
        $selectRombel = \App\Rombel::distinct()->pluck('rombel')->sort();

        return view('student.editStudent', compact('student', 'selectRayon', 'selectRombel'));
    }

    public function update(Request $request, $id)
    {
        $student = \App\Student::find($id);
        $student->update($request->all());

        return redirect('/student')->with('sukses', 'Data berhasil diupdate');
    }

    // delete
    public function delete($id)
    {
        $student = \App\Student::find($id);
        $student->delete($id);

        return redirect('/student')->with('delete', 'Data berhasil dihapus');
    }
}
