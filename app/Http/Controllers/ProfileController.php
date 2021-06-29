<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit($id)
    {
        $data_pengunjung = \App\User::find($id);
        return view('pengunjung/profile', ['pengunjung' => $data_pengunjung]);
    }
    public function pengunjung()
    {
        $pengunjung = \App\Pengunjung::all();
    }
    public function update(Request $request, $id)
    {
        $pengunjung = \App\User::find($id);
        $pengunjung->update($request->all());
        return redirect('/dashboard');
    }
}
