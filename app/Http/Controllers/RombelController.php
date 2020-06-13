<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RombelController extends Controller
{
    // Must login before
    public function __construct()
    {
        $this->middleware('auth');
    }

    // read
    public function rombel()
    {
        $rombel = \App\Rombel::paginate(5);

        return view('rombel.dataRombel', compact('rombel'));
    }

    // insert
    public function add(Request $request)
    {
        \App\Rombel::create($request->all());

        return redirect('/rombel')->with('sukses', 'Data Berhasil diinput');
    }

    // edit && update
    public function edit($id)
    {
        $rombel = \App\Rombel::find($id);

        return view('rombel.editRombel', compact('rombel'));
    }

    public function update(Request $request, $id)
    {
        $rombel = \App\Rombel::find($id);
        $rombel->update($request->all());

        return redirect('/rombel')->with('sukses', 'Data berhasil diupdate');
    }

}
