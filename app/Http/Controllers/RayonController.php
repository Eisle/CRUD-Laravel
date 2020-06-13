<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RayonController extends Controller
{
    // Must login before
    public function __construct()
    {
        $this->middleware('auth');
    }

    // read
    public function rayon()
    {
        $rayon = \App\Rayon::paginate(5);

        return view('rayon.dataRayon', compact('rayon'));
    }

    // insert
    public function add(Request $request)
    {
        \App\Rayon::create($request->all());

        return redirect('/rayon')->with('sukses', 'Data Berhasil diinput');
    }

    // edit && update
    public function edit($id)
    {
        $rayon = \App\Rayon::find($id);
        
        return view('rayon.editRayon', compact('rayon'));
    }

    public function update(Request $request, $id)
    {
        $rayon = \App\Rayon::find($id);
        $rayon->update($request->all());

        return redirect('/rayon')->with('sukses', 'Data berhasil diupdate');
    }
}
