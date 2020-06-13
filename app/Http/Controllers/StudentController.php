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

    public function index()
    {
        $student = \App\Student::paginate(5);

        // option select
        $selectRayon = \App\Rayon::distinct()->pluck('rayon')->sort();
        $selectRombel = \App\Rombel::distinct()->pluck('rombel')->sort();

        return view('student.dataStudent', compact('student', 'selectRayon', 'selectRombel'));
    }
}
