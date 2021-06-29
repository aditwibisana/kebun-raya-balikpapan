<?php

namespace App\Http\Controllers;

use DateTime;
use Auth;
use Illuminate\Http\Request;

class TempatController extends Controller
{
    public function index()
    {
        $daftar_tempat = \App\Tempat::all();
        return view('pengunjung.tempat', ['daftar_tempat' => $daftar_tempat]);
    }
    public function pesan($id)
    {
        $daftar_tempat = \App\Tempat::find($id);
        return view('pengunjung/pesan', ['daftar_tempat' => $daftar_tempat]);
    }
    public function booking(Request $request, $id)
    {
        $daftar_tempat = \App\Tempat::find($id);
        $check_in = $request->check_in;
        $check_out = $request->check_out;
        $daftar_tempat->harga;
        $daftar_tempat->nama_tempat;
        $datetime1 = new DateTime($check_in);
        $datetime2 = new DateTime($check_out);
        $intervals = $datetime1->diff($datetime2);
        $durasi = $intervals->format('%a');
        $total_harga = $daftar_tempat->harga * $durasi;
        $tanggal_pesan = date('Y-m-d H:i:s');
        $bukti = ('Belum Ada');
        $konfirmasi = ('Belum Konfrimasi');
        $request->request->add(['user_id' => auth()->user()->id]);
        $request->request->add(['tempat_id' => $daftar_tempat->id]);
        $request->request->add(['tanggal_pesan' => $tanggal_pesan]);
        $request->request->add(['durasi' => $durasi]);
        $request->request->add(['harga' => $daftar_tempat->harga]);
        $request->request->add(['nama_tempat' => $daftar_tempat->nama_tempat]);
        $request->request->add(['total_harga' => $total_harga]);
        $request->request->add(['bukti' => $bukti]);
        $request->request->add(['konfirmasi' => $konfirmasi]);
        $pemesanan = \App\Pemesanan::create($request->all());
        return redirect('/tempat')->with('sukses', 'Pemesanan Berhasil!!! Silahkan Tunggu Konfirmasi Admin');
    }
    public function tampil()
    {
        $daftar_tempat = \App\Tempat::all();
        return view('adm.tempat.tampil', ['daftar_tempat' => $daftar_tempat]);
    }
    public function tambah()
    {
        return view('adm.tempat.create');
    }
    public function edit($id)
    {
        $daftar_tempat = \App\Tempat::find($id);
        return view('adm/tempat/edit', ['daftar_tempat' => $daftar_tempat]);
    }
    public function create(Request $request)
    {
        $daftar_tempat = \App\Tempat::create($request->all());
        if ($request->hasFile('foto_tempat1')) {
            $request->file('foto_tempat1')->move('images/fototempat/', $request->file('foto_tempat1')->getClientOriginalName());
            $daftar_tempat->foto_tempat1 = $request->file('foto_tempat1')->getClientOriginalName();
            $daftar_tempat->save();
        }
        if ($request->hasFile('foto_tempat2')) {
            $request->file('foto_tempat2')->move('images/fototempat/', $request->file('foto_tempat2')->getClientOriginalName());
            $daftar_tempat->foto_tempat2 = $request->file('foto_tempat2')->getClientOriginalName();
            $daftar_tempat->save();
        }
        if ($request->hasFile('foto_tempat3')) {
            $request->file('foto_tempat3')->move('images/fototempat/', $request->file('foto_tempat3')->getClientOriginalName());
            $daftar_tempat->foto_tempat3 = $request->file('foto_tempat3')->getClientOriginalName();
            $daftar_tempat->save();
        }
        return redirect('/datatempat')->with('sukses', 'Data Berhasil ditambahkan');;
    }
    public function update(Request $request, $id)
    {
        $daftar_tempat = \App\Tempat::find($id);
        $daftar_tempat->update($request->all());
        return redirect('/datatempat')->with('sukses', 'Data berhasil diupdate');
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $daftar_tempat = \App\Tempat::where('nama_tempat', 'LIKE', '%' . $request->cari . '%')->paginate(10);
        return view('adm/tempat/tampil', ['daftar_tempat' => $daftar_tempat]);
    }
    public function delete($id)
    {
        $daftar_tempat = \App\tempat::find($id);
        $daftar_tempat->delete();
        return redirect('/datatempat')->with('sukses', 'Data Berhasil dihapus');;
    }
}
