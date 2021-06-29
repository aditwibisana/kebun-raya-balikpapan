<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public function index()
    {
        return view('pengunjung.index');
    }
    public function create(Request $request)
    {
        // Data yang sama diinsert kedalam tabel user
        $user = new \App\User;
        $user->role = 'pengunjung';
        $user->name = $request->nama_lengkap;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        $user->password = bcrypt('kebunrayabalikpapan');
        $user->remember_token = str_random(60);
        $user->save();
        // Fungsi Insert kedalam tabel pengunjung
        $request->request->add(['user_id' => $user->id]);
        $pengunjung = \App\Pengunjung::create($request->all());
        return redirect('/pengunjung')->with('sukses', 'Password anda adalah "kebunrayabalikpapan"');
    }
    public function tampil()
    {
        $data_pengunjung = \App\Pengunjung::all();
        $data_pengunjung = \App\Pengunjung::paginate(10);
        return view('adm.member', ['data_pengunjung' => $data_pengunjung], compact('rows'));
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $pengunjung = \App\Pengunjung::where('nama_lengkap', 'LIKE', '%' . $request->cari . '%')->paginate(1);
        return view('adm/member', ['data_pengunjung' => $pengunjung]);
    }
    public function edit($id)
    {
        $data_pengunjung = \App\Pengunjung::find($id);
        return view('adm/editpengunjung', ['pengunjung' => $data_pengunjung]);
    }
    public function update(Request $request, $id)
    {
        $user = \App\User::find($id);
        $user = \App\User::where('id', $id)->first();
        $user->name = $request->input('nama_lengkap');
        $user->email = $request->input('email');
        $user->no_hp = $request->input('no_hp');
        if ($user->save()) {
            $pengunjung = \App\Pengunjung::find($id);
            $pengunjung = \App\Pengunjung::where('id', $id)->first();
            $pengunjung->user_id = $request->input('user_id');
            $pengunjung->nama_lengkap = $request->input('nama_lengkap');
            $pengunjung->email = $request->input('email');
            $pengunjung->no_hp = $request->input('no_hp');
            $pengunjung->alamat = $request->input('alamat');
            $pengunjung->user_id = $user->id;
        }
        $pengunjung->save();
        $res = new \App\Pengunjung();
        return redirect('/datapengunjung')->with('sukses', 'Data Berhasil diupdate');
    }
    public function delete($id)
    {
        $data_pengunjung = \App\Pengunjung::find($id);
        $data_pengunjung->delete();
        return redirect('/datapengunjung')->with('sukses', 'Data Berhasil dihapus');;
    }
    public function tambah()
    {
        return view('adm.tambahpengunjung');
    }
    public function tambahdata(Request $request)
    {
        // Data yang sama diinsert kedalam tabel user
        $user = new \App\User;
        $user->role = 'pengunjung';
        $user->name = $request->nama_lengkap;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        $user->password = bcrypt('kebunrayabalikpapan');
        $user->remember_token = str_random(60);
        $user->save();
        // Fungsi Insert kedalam tabel pengunjung
        $request->request->add(['user_id' => $user->id]);
        $pengunjung = \App\Pengunjung::create($request->all());
        return redirect('/datapengunjung')->with('sukses', 'Data Berhasil ditambah');
    }
}
