<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        return view('pengguna.index');
    }

    public function create(Request $request)
    {
        \App\Pengguna::create($request->all());
        return redirect('/pengguna')->with('sukses', 'Selamat Berkunjung di Kebun Raya Balikpapan');
    }
    public function tampil()
    {
        $data_pengguna = \App\Pengguna::all();
        $data_pengguna = $data_pengguna->count();
        $data_pengguna = \App\Pengguna::paginate(10);
        return view('adm.pengguna.tampil', ['data_pengguna' => $data_pengguna], compact('rows'));
    }
    public function edit($id)
    {
        $data_pengguna = \App\Pengguna::find($id);
        return view('adm/pengguna/edit', ['data_pengguna' => $data_pengguna]);
    }
    public function update(Request $request, $id)
    {
        $data_pengguna = \App\Pengguna::find($id);
        $data_pengguna->update($request->all());
        return redirect('/datapengguna')->with('sukses', 'Data berhasil diupdate');
    }
    public function tambah()
    {
        return view('adm.pengguna.create');
    }
    public function tambahdata(Request $request)
    {
        \App\Pengguna::create($request->all());
        return redirect('/datapengguna')->with('sukses', 'Data Berhasil ditambahkan');
    }
    public function delete($id)
    {
        $data_pengunjung = \App\Pengguna::find($id);
        $data_pengunjung->delete();
        return redirect('/datapengguna')->with('sukses', 'Data Berhasil dihapus');;
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $data_pengguna = \App\Pengguna::where('nama_pengguna', 'LIKE', '%' . $request->cari . '%')->paginate(10);
        return view('adm/pengguna/tampil', ['data_pengguna' => $data_pengguna]);
    }
}
