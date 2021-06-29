<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpotController extends Controller
{
    public function index()
    {
        $daftar_spot = \App\Spot::all();
        $daftar_spot = $daftar_spot->count();
        $daftar_spot = \App\Spot::paginate(10);
        return view('pengguna.spot', ['daftar_spot' => $daftar_spot], compact('rows'));
    }
    public function tampil()
    {
        $daftar_spot = \App\Spot::all();
        $daftar_spot = $daftar_spot->count();
        $daftar_spot = \App\Spot::paginate(10);
        return view('adm.spot.tampil', ['daftar_spot' => $daftar_spot], compact('rows'));
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $daftar_spot = \App\Spot::where('nama_spot', 'LIKE', '%' . $request->cari . '%')->paginate(10);
        return view('adm/spot/tampil', ['daftar_spot' => $daftar_spot]);
    }
    public function tambah()
    {
        return view('adm.spot.create');
    }
    public function tambahdata(Request $request)
    {
        \App\Spot::create($request->all());
        return redirect('/daftarspot')->with('sukses', 'Data Berhasil ditambahkan');
    }
    public function edit($id)
    {
        $daftar_spot = \App\Spot::find($id);
        return view('adm/spot/edit', ['daftar_spot' => $daftar_spot]);
    }
    public function update(Request $request, $id)
    {
        $daftar_spot = \App\Spot::find($id);
        $daftar_spot->update($request->all());
        return redirect('/daftarspot')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $daftar_spot = \App\Spot::find($id);
        $daftar_spot->delete();
        return redirect('/daftarspot')->with('sukses', 'Data Berhasil dihapus');;
    }
}
