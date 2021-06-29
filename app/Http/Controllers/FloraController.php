<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FloraController extends Controller
{
    public function index()
    {
        $daftar_flora = \App\Flora::all();
        $daftar_flora = $daftar_flora->count();
        $daftar_flora = \App\Flora::paginate(10);
        return view('pengguna.flora', ['daftar_flora' => $daftar_flora], compact('rows'));
    }
    public function tampil()
    {
        $daftar_flora = \App\Flora::all();
        $daftar_flora = $daftar_flora->count();
        $daftar_flora = \App\Flora::paginate(10);
        return view('adm.flora.tampil', ['daftar_flora' => $daftar_flora], compact('rows'));
    }
    public function tambah()
    {
        return view('adm.flora.create');
    }
    public function tambahdata(Request $request)
    {
        \App\Flora::create($request->all());
        return redirect('/daftarflora')->with('sukses', 'Data Berhasil ditambahkan');
    }
    public function edit($id)
    {
        $daftar_flora = \App\Flora::find($id);
        return view('adm/flora/edit', ['daftar_flora' => $daftar_flora]);
    }
    public function update(Request $request, $id)
    {
        $daftar_flora = \App\Flora::find($id);
        $daftar_flora->update($request->all());
        return redirect('/daftarflora')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $daftar_flora = \App\Flora::find($id);
        $daftar_flora->delete();
        return redirect('/daftarflora')->with('sukses', 'Data Berhasil dihapus');;
    }
    public function read($id)
    {
        $daftar_flora = \App\Flora::find($id);
        return view('pengguna/readflora', ['daftar_flora' => $daftar_flora]);
    }
}
